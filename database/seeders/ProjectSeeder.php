<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'name' => 'Agripages',
            'slug' => 'agripages',
            'category' => 'Marketplace',
            'short_desc' => 'Agricultural marketplace connecting buyers and sellers across Morocco.',
            'overview' => 'Agripages is a digital agricultural marketplace built to connect farmers, suppliers, and buyers across Morocco through a modern online platform.',
            'problem' => 'Agricultural businesses and farmers faced difficulties finding reliable buyers and suppliers through traditional channels, causing delays and inefficiencies.',
            'solution' => 'Built a scalable marketplace platform enabling product listing, business discovery, and streamlined communication between buyers and sellers.',
            'thumbnail' => 'projects/agripages.png',
            'live_url' => 'https://agripages.ma/',
            'github_url' => null,
            'tools' => ['Laravel', 'MySQL', 'Bootstrap', 'JavaScript'],
            'featured' => true,
            'status' => true,
        ]);

        Project::create([
            'name' => 'RDV Medical',
            'slug' => 'rdv-medical',
            'category' => 'Healthcare',
            'short_desc' => 'Appointment booking platform for doctors, clinics and healthcare providers.',
            'overview' => 'RDV Medical is a healthcare appointment management platform designed to simplify booking and scheduling for patients and healthcare providers.',
            'problem' => 'Many clinics and healthcare providers still manage appointments manually, creating inefficiencies and poor patient experience.',
            'solution' => 'Developed an appointment booking platform with scheduling, patient management, and streamlined booking workflows for medical professionals.',
            'thumbnail' => 'projects/rdvmedical.png',
            'live_url' => 'https://rdvmedical.ma/',
            'github_url' => null,
            'tools' => ['Laravel', 'MySQL', 'Bootstrap', 'JavaScript'],
            'featured' => true,
            'status' => true,
        ]);

        Project::create([
            'name' => 'LinkPro',
            'slug' => 'linkpro',
            'category' => 'SaaS',
            'short_desc' => 'Link-in-bio platform allowing businesses and creators to centralize their links.',
            'overview' => 'LinkPro is a SaaS platform that helps creators, entrepreneurs, and businesses centralize all their important links into one optimized landing page.',
            'problem' => 'Creators and businesses often struggle to share multiple important links across social media platforms with limited profile link options.',
            'solution' => 'Built a scalable SaaS link-in-bio solution with customizable templates, branding options, and analytics-ready architecture.',
            'thumbnail' => 'projects/linkpro.png',
            'live_url' => 'https://linkpro.ma/',
            'github_url' => null,
            'tools' => ['Laravel', 'MySQL', 'Bootstrap', 'JavaScript'],
            'featured' => true,
            'status' => true,
        ]);
    }
}
