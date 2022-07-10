<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\provinsi::factory(32)->create();
        \App\Models\ibukota::factory(32)->create();
        \App\Models\domisili::factory(32)->create();
        \App\Models\course::factory(4)->create();
        \App\Models\mahasiswa::factory(100)->create();
        \App\Models\absensi::factory(100)->create();
        \App\Models\pembayaran::factory(100)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
