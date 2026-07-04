<?php
namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Certificate;
use App\Models\Education;
use App\Models\Setting;

class PortfolioController extends Controller {
    public function index() {
        return view('portfolio', [
            'projects'         => Project::orderBy('sort_order')->get(),
            'skills'           => Skill::orderBy('sort_order')->get()->groupBy('category'),
            'experiences'      => Experience::orderBy('sort_order')->get(),
            'internship_count' => Experience::where('role','like','%Intern%')->count(),
            'certificates'     => Certificate::orderBy('sort_order')->get(),
            'education'        => Education::orderBy('sort_order')->get(),
            'settings'         => [
                'greeting'      => Setting::get('hero_greeting'),
                'role'          => Setting::get('hero_role'),
                'intro'         => Setting::get('hero_intro'),
                'cv_file'       => Setting::get('cv_file'),
                'email'         => Setting::get('email'),
                'github_url'    => Setting::get('github_url'),
                'linkedin_url'  => Setting::get('linkedin_url'),
                'profile_image' => Setting::get('profile_image'),
            ],
        ]);
    }
}
