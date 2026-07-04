<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Concerns\HandlesUploads;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller {
    use HandlesUploads;

    public function edit() {
        $keys = ['site_name','email','github_url','linkedin_url','cv_file','profile_image'];
        $values = collect($keys)->mapWithKeys(fn($k)=>[$k => Setting::get($k)]);
        return view('admin.settings.edit', compact('values'));
    }

    public function update(Request $r) {
        $data = $r->validate([
            'site_name'    => 'required|string|max:120',
            'email'        => 'required|email',
            'github_url'   => 'nullable|url',
            'linkedin_url' => 'nullable|url',
            'cv_file'      => 'nullable|file|mimes:pdf|max:10240',
            'profile_image'=> 'nullable|image|max:4096',
        ]);
        foreach (['site_name','email','github_url','linkedin_url'] as $k) {
            Setting::put($k, $data[$k] ?? '');
        }
        if ($r->hasFile('cv_file')) {
            Setting::put('cv_file', $this->upload($r->file('cv_file'),'settings',Setting::get('cv_file')));
        }
        if ($r->boolean('remove_profile_image')) {
            $this->deleteFile(Setting::get('profile_image'));
            Setting::put('profile_image', null);
        } elseif ($r->hasFile('profile_image')) {
            Setting::put('profile_image', $this->upload($r->file('profile_image'),'settings',Setting::get('profile_image')));
        }
        return back()->with('status','Settings updated.');
    }
}
