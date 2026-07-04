<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class HeroController extends Controller {
    public function edit() {
        return view('admin.hero.edit', [
            'greeting' => Setting::get('hero_greeting'),
            'role'     => Setting::get('hero_role'),
            'intro'    => Setting::get('hero_intro'),
        ]);
    }
    public function update(Request $r) {
        $data = $r->validate([
            'hero_greeting'=>'required|string|max:180',
            'hero_role'    =>'required|string|max:180',
            'hero_intro'   =>'required|string|max:1000',
        ]);
        foreach ($data as $k => $v) Setting::put($k, $v);
        return back()->with('status','Hero updated.');
    }
}
