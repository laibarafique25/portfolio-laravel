<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Concerns\HandlesUploads;
use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller {
    use HandlesUploads;

    public function index() { return view('admin.certificates.index',['items'=>Certificate::orderBy('sort_order')->paginate(10)]); }
    public function create() { return view('admin.certificates.form',['item'=>new Certificate()]); }
    public function store(Request $r) { return $this->save($r,new Certificate()); }
    public function edit(Certificate $certificate) { return view('admin.certificates.form',['item'=>$certificate]); }
    public function update(Request $r, Certificate $certificate) { return $this->save($r,$certificate); }
    public function destroy(Certificate $certificate) {
        $this->deleteFile($certificate->certificate_image);
        $this->deleteFile($certificate->credential_file);
        $certificate->delete();
        return back()->with('status','Certificate deleted.');
    }

    private function save(Request $r, Certificate $c) {
        $data = $r->validate([
            'title'=>'required|string|max:180',
            'organization'=>'required|string|max:120',
            'description'=>'nullable|string',
            'credential_link'=>'nullable|url',
            'issue_date'=>'nullable|date',
            'featured'=>'sometimes|boolean',
            'sort_order'=>'nullable|integer',
            'certificate_image'=>'nullable|image|max:4096',
            'credential_file'=>'nullable|file|mimes:pdf|max:8192',
        ]);
        $data['featured'] = $r->boolean('featured');
        if ($r->boolean('remove_certificate_image')) {
            $this->deleteFile($c->certificate_image);
            $data['certificate_image'] = null;
        } elseif ($r->hasFile('certificate_image')) {
            $data['certificate_image'] = $this->upload($r->file('certificate_image'),'certificates',$c->certificate_image);
        } else {
            $data['certificate_image'] = $c->certificate_image;
        }
        $data['credential_file']   = $this->upload($r->file('credential_file'),'certificates/files',$c->credential_file);
        $c->fill($data)->save();
        return redirect()->route('admin.certificates.index')->with('status','Certificate saved.');
    }
}
