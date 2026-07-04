<?php
namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Certificate;
use App\Models\Education;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run(): void {
        Admin::firstOrCreate(
            ['email' => 'admin@laiba.dev'],
            ['name' => 'Laiba Rafique', 'password' => 'password']
        );

        $settings = [
            'site_name'      => 'Laiba Rafique',
            'hero_greeting'  => "Hi, I'm Laiba Rafique",
            'hero_role'      => 'Junior Full Stack Web Developer',
            'hero_intro'     => 'I build responsive, scalable and user-focused web applications using PHP, Laravel, MySQL, JavaScript and Bootstrap.',
            'cv_file'        => '',
            'email'          => 'laiba.rafique@example.com',
            'github_url'     => 'https://github.com/laibarafique25/',
            'linkedin_url'   => 'https://www.linkedin.com/in/laiba-rafique-6745623b9/',
            'profile_image'  => '',
        ];
        foreach ($settings as $k => $v) Setting::put($k, $v);

        $projects = [
            ['EventraX','Smart Event Registration Platform',['PHP','MySQL','Bootstrap']],
            ['Bella Vista','Restaurant Management System',['PHP','MySQL','JavaScript']],
            ['Address Book','E-Commerce Platform',['PHP','MySQL']],
            ['URL Shortener','Link Management Tool',['PHP','PDO','MySQL']],
            ['TaskFlow','JavaScript Productivity App',['JavaScript','CSS']],
            ['AuraForm','AI Powered Onboarding Experience',['JavaScript','Laravel']],
            ['Wanderlane','Travel Agency Website',['HTML','CSS','JavaScript']],
            ['Dreamweaver Moments','Camera E-Commerce Website',['PHP','MySQL']],
        ];
        foreach ($projects as $i => [$n,$t,$s]) {
            Project::create([
                'name' => $n, 'tagline' => $t, 'stack' => $s,
                'github_url' => 'https://github.com/laibarafique25/',
                'featured' => $i < 4, 'sort_order' => $i,
            ]);
        }

        $skills = [
            ['HTML5','frontend',95],['CSS3','frontend',92],['Bootstrap 5','frontend',90],['JavaScript','frontend',85],
            ['PHP','backend',88],['Laravel','backend',82],['MySQL','backend',85],
            ['Git','tools',85],['GitHub','tools',88],['VS Code','tools',95],['XAMPP','tools',90],
        ];
        foreach ($skills as $i => [$n,$c,$l]) Skill::create(['name'=>$n,'category'=>$c,'level'=>$l,'sort_order'=>$i]);

        $exp = [
            ['Computer Science Teacher','Dar-e-Arqam Schools','Pakistan','May 2026 — Present','Teaching CS fundamentals and web technologies.'],
            ['Frontend Developer Intern','DecodeLabs','Remote','Apr 2026 — Jun 2026','Built responsive UIs across real-world projects.'],
            ['Backend Developer Intern','CodeAlpha','Remote','Apr 2026 — May 2026','Developed PHP + MySQL backend modules and REST endpoints.'],
        ];
        foreach ($exp as $i => [$r,$c,$l,$p,$d]) Experience::create(['role'=>$r,'company'=>$c,'location'=>$l,'period'=>$p,'description'=>$d,'sort_order'=>$i]);

        Certificate::create([
            'title'=>'Frontend Development Internship','organization'=>'DecodeLabs',
            'description'=>'DecodeLabs Virtual Internship Program in Frontend Development.',
            'issue_date'=>'2026-05-21','featured'=>true,'sort_order'=>0,
        ]);
        Certificate::create([
            'title'=>'Backend Development Internship','organization'=>'CodeAlpha',
            'description'=>'CodeAlpha Virtual Internship Program in Backend Development.',
            'issue_date'=>'2026-06-01','featured'=>true,'sort_order'=>1,
        ]);

        Education::create([
            'degree'=>"Bachelor's in Computer Science",'institution'=>'University Program','period'=>'In Progress',
            'description'=>'Focused on software engineering, databases and web application development.','sort_order'=>0,
        ]);
    }
}
