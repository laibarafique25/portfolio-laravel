<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller {
    public function index() { return view('admin.education.index',['items'=>Education::orderBy('sort_order')->paginate(10)]); }
    public function create() { return view('admin.education.form',['item'=>new Education()]); }
    public function store(Request $r) { return $this->save($r,new Education()); }
    public function edit(Education $education) { return view('admin.education.form',['item'=>$education]); }
    public function update(Request $r, Education $education) { return $this->save($r,$education); }
    public function destroy(Education $education) { $education->delete(); return back()->with('status','Education deleted.'); }

    private function save(Request $r, Education $e) {
        $data = $r->validate([
            'degree'=>'required|string|max:180',
            'institution'=>'required|string|max:180',
            'institution_website'=>'nullable|url',
            'start_date'=>'nullable|date',
            'end_date'=>'nullable|date|after_or_equal:start_date',
            'in_progress'=>'sometimes|boolean',
            'description'=>'nullable|string',
            'sort_order'=>'nullable|integer|min:0',
        ]);

        $data['in_progress'] = $r->boolean('in_progress');
        if (is_null($data['sort_order'])) {
            $data['sort_order'] = (Education::max('sort_order') ?? -1) + 1;
        }
        if ($data['start_date']) {
            $start = $data['start_date'];
            $end = $data['in_progress'] ? 'Present' : ($data['end_date'] ?? null);
            $data['period'] = $end ? date('M Y', strtotime($start)) . ' – ' . ($end === 'Present' ? 'Present' : date('M Y', strtotime($end))) : '';
        } elseif (!$e->period) {
            $data['period'] = '';
        }

        $e->fill($data)->save();
        return redirect()->route('admin.education.index')->with('status','Education saved.');
    }
}
