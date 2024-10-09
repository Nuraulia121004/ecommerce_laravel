<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use App\Models\Skripsi;
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

        User:: create ([
            'name'=>'user2',
            'email'=>'user2@gmail.com',
            'password'=>bcrypt('123456789'),
            'point'=>10000,
        ]);
        Admin::create ([
            'name'=>'admin',
            'username'=>'Admin2',
            'email'=>'admin2@gmail.com',
            'password'=>bcrypt('123456789'),

        ]);
        Skripsi::create([
            'judul' => 'Penerapan Algoritma BFS pada pencarian Rute terpendek ',
            'nama' => 'Nuraulia Octaviana',
            'nim' => 6304221500,
            'angkatan' => 2022,
            'dosen_1' => 'fajri profesio putra',
            'dosen_2' => 'elvi rahmi'
        ]);

    }
}
