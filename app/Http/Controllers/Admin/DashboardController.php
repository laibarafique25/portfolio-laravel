<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{Project, Skill, Experience, Certificate, Education, Message};

class DashboardController extends Controller {
    public function index() {
        return view('admin.dashboard', [
            'stats' => [
                'Projects'     => Project::count(),
                'Skills'       => Skill::count(),
                'Experiences'  => Experience::count(),
                'Certificates' => Certificate::count(),
                'Education'    => Education::count(),
                'Messages'     => Message::count(),
                'Unread'       => Message::where('is_read', false)->count(),
            ],
            'recent' => Message::latest()->limit(5)->get(),
        ]);
    }
}
