<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Concerns\HandlesUploads;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller {
    use HandlesUploads;

    public function index(Request $r) {
        $q = Project::query();
        if ($s = $r->get('q')) $q->where('name','like',"%$s%")->orWhere('tagline','like',"%$s%");
        return view('admin.projects.index', ['projects' => $q->orderBy('sort_order')->paginate(10)->withQueryString()]);
    }
    public function create() { return view('admin.projects.form', ['project' => new Project()]); }
    public function store(Request $r) { return $this->save($r, new Project()); }
    public function edit(Project $project) { return view('admin.projects.form', compact('project')); }
    public function update(Request $r, Project $project) { return $this->save($r, $project); }
    public function destroy(Project $project) {
        $this->deleteFile($project->image);
        $project->delete();
        return back()->with('status','Project deleted.');
    }

    private function save(Request $r, Project $p) {
        $data = $r->validate([
            'name' => 'required|string|max:120',
            'tagline' => 'required|string|max:180',
            'description' => 'nullable|string',
            'stack' => 'nullable|string',
            'github_url' => 'nullable|url',
            'live_url' => 'nullable|url',
            'featured' => 'sometimes|boolean',
            'sort_order' => 'nullable|integer|min:0',
            'image' => 'nullable|image|max:4096',
        ]);
        $data['stack'] = array_values(array_filter(array_map('trim', explode(',', $data['stack'] ?? ''))));
        $data['featured'] = $r->boolean('featured');
        if (is_null($data['sort_order'])) {
            $data['sort_order'] = (Project::max('sort_order') ?? -1) + 1;
        }
        if ($r->boolean('remove_image')) {
            $this->deleteFile($p->image);
            $data['image'] = null;
        } elseif ($r->hasFile('image')) {
            $data['image'] = $this->upload($r->file('image'), 'projects', $p->image);
        } else {
            $data['image'] = $p->image;
        }
        $p->fill($data)->save();
        return redirect()->route('admin.projects.index')->with('status','Project saved.');
    }
}
