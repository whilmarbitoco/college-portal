<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\SiteInfo;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'email' => 'test@example.com',
            'role' => UserRole::INSTRUCTOR->value
        ]);

        SiteInfo::factory()->create([
            'name' => 'Nebula College',
            'acronym' => 'NC',
            'description' => 'Your centralized hub for accessing grades, class schedules, announcements, and important academic resources.',
            'story' => ' Established in 20XX, Nebula College has rapidly grown into a beacon of academic excellence and innovation in the Davao Region, Philippines. We are committed to fostering a dynamic learning environment that prepares students for the challenges and opportunities of a rapidly evolving global landscape.Our institution was founded on the principle that quality education should be accessible and transformative, empowering individuals to achieve their full potential and contribute meaningfully to society.',
            'mission' => 'To provide high-quality, accessible, and innovative education that empowers students with knowledge, skills, and values essential for personal growth, professional success, and responsible global citizenship. We are dedicated to fostering critical thinking, creativity, and a lifelong passion for learning.',
            'vision' => 'To be a leading educational institution recognized for academic distinction, groundbreaking research, and community engagement, shaping future leaders and innovators who drive positive change in the Philippines and beyond.',
            'values' => '
    Excellence: Striving for the highest standards in education, research, and service.
    Integrity: Upholding honesty, ethics, and transparency in all endeavors.
    Innovation: Embracing creativity and forward-thinking approaches to learning and problem-solving.
    Community: Fostering a supportive, inclusive, and collaborative environment.
    Empowerment: Equipping individuals with the tools and confidence to realize their potential.
'
        ]);
    }
}
