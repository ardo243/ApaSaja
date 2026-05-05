<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Akun Admin Utama
        \App\Models\User::create([
        'name' => 'Admin Amikom',
        'email' => 'admin@amikom.ac.id',
        'password' => bcrypt('password'),
        'role' => 'admin',
        ]);

        // 2. Insert Kategori Event
        $category = \App\Models\Category::create([
        'name' => 'Seminar IT',
        'slug' => 'seminar-it',
        ]);

        $category2 = \App\Models\Category::firstOrCreate([
        'name' => 'Entertaiment',
        'slug' => 'entertaiment',
        ]);
        
        $category3 = \App\Models\Category::firstOrCreate([
        'name' => 'Seminar',
        'slug' => 'seminar',
        ]);

        $category4 = \App\Models\Category::firstOrCreate([
            'name' => 'Kompetisi',
            'slug' => 'kompetisi',
        ]);
        $category5 = \App\Models\Category::firstOrCreate([
            'name' => 'Hiburan',
            'slug' => 'hiburan',
        ]);

        
        // 3. Insert Sampel Events
        \App\Models\Event::create([
        'category_id' => $category2->id,
        'title' => 'Jazz Night 2025',
        'description' => 'Nikmati malam yang indah dengan alunan musik jazz yang merdu.',
        'date' => '2026-05-10 19:00:00',
        'location' => 'Amikom Baru',
        'price' => 50000,
        'stock' => 100,
        'poster_path' => 'posters/event-1.png',
        ]);


        \App\Models\Event::create([
        'category_id' => $category->id,
        'title' => 'Hackaton - Unleash Your Inner Developer',
        'description' => 'Ayo asah skill coding kamu dan ciptakan solusi inovatif untuk tantangan masa depan!',
        'date' => '2026-05-05 10:00:00',
        'location' => 'Inkubator Amikom',
        'price' => 50000,
        'stock' => 100,
        'poster_path' => 'posters/event-2.png',
        ]);

        \App\Models\Event::create([
        'category_id' => $category->id,
        'title' => 'AI & FUTURE TECH SUMMIT 2026',
        'description' => 'Jelajahi tren terkini dalam kecerdasan buatan dan teknologi masa depan bersama para ahli di bidangnya.',
        'date' => '2026-05-01 13:00:00',
        'location' => 'Cinema Unit 6',
        'price' => 50000,
        'stock' => 100,
        'poster_path' => 'posters/event-3.png',
        ]);
        
        // EVENT (VARIATIF)
        \App\Models\Event::create([
            'category_id' => $category3->id,
            'title' => 'UI/UX Masterclass',
            'description' => 'Belajar desain modern',
            'date' => '2026-06-01 09:00:00',
            'location' => 'Auditorium Kampus',
            'price' => 75000,
            'stock' => 100,
            'poster_path' => 'posters/workshop.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category3->id,
            'title' => 'Digital Marketing Bootcamp',
            'description' => 'Strategi marketing digital',
            'date' => '2026-06-03 10:00:00',
            'location' => 'Ruang Seminar',
            'price' => 60000,
            'stock' => 80,
            'poster_path' => 'posters/event-2.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category4->id,
            'title' => 'E-Sport U-Champ',
            'description' => 'Turnamen game mahasiswa',
            'date' => '2026-06-10 13:00:00',
            'location' => 'Hall Kampus',
            'price' => 50000,
            'stock' => 150,
            'poster_path' => 'posters/hackathon.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category4->id,
            'title' => 'Hackathon 24 Jam',
            'description' => 'Kompetisi coding intensif',
            'date' => '2026-06-12 08:00:00',
            'location' => 'Lab Komputer',
            'price' => 0,
            'stock' => 50,
            'poster_path' => 'posters/event-3.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category5->id,
            'title' => 'Music Festival Night',
            'description' => 'Festival musik live',
            'date' => '2026-06-20 19:00:00',
            'location' => 'Lapangan Utama',
            'price' => 120000,
            'stock' => 300,
            'poster_path' => 'posters/concert.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category5->id,
            'title' => 'Stand Up Comedy Show',
            'description' => 'Pertunjukan komedi',
            'date' => '2026-06-22 20:00:00',
            'location' => 'Gedung Serbaguna',
            'price' => 50000,
            'stock' => 120,
            'poster_path' => 'posters/event-1.png',
        ]);


    }
}
