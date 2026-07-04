<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller {
    public function index() { return view('admin.skills.index', ['skills'=>Skill::orderBy('sort_order')->paginate(15)]); }
    public function create() { return view('admin.skills.form', ['skill'=>new Skill()]); }
    public function store(Request $r) { return $this->save($r, new Skill()); }
    public function edit(Skill $skill) { return view('admin.skills.form', compact('skill')); }
    public function update(Request $r, Skill $skill) { return $this->save($r, $skill); }
    public function destroy(Skill $skill) { $skill->delete(); return back()->with('status','Skill deleted.'); }

    private function save(Request $r, Skill $s) {
        $data = $r->validate([
            'name'=>'required|string|max:80',
            'category'=>'required|in:frontend,backend,tools',
            'level'=>'required|integer|min:0|max:100',
            'sort_order'=>'nullable|integer',
        ]);
        $s->fill($data)->save();
        return redirect()->route('admin.skills.index')->with('status','Skill saved.');
    }
}
