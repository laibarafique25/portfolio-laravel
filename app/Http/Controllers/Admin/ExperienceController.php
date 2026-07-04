<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller {
    public function index() { return view('admin.experiences.index',['items'=>Experience::orderBy('sort_order')->paginate(10)]); }
    public function create() { return view('admin.experiences.form',['item'=>new Experience()]); }
    public function store(Request $r) { return $this->save($r,new Experience()); }
    public function edit(Experience $experience) { return view('admin.experiences.form',['item'=>$experience]); }
    public function update(Request $r, Experience $experience) { return $this->save($r,$experience); }
    public function destroy(Experience $experience) { $experience->delete(); return back()->with('status','Experience deleted.'); }

    private function save(Request $r, Experience $e) {
        $data = $r->validate([
            'role'=>'required|string|max:120',
            'company'=>'required|string|max:120',
            'location'=>'nullable|string|max:120',
            'period'=>'required|string|max:60',
            'description'=>'nullable|string',
            'sort_order'=>'nullable|integer',
        ]);
        $e->fill($data)->save();
        return redirect()->route('admin.experiences.index')->with('status','Experience saved.');
    }
}
