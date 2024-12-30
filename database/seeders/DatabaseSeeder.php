<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Muchamad Taufik Mulyadi',
            'role' => 'admin',
            'email' => 'muhamadtaufikm10@gmail.com',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'Rekrutmen',
            'role' => 'hrd',
            'email' => 'rekrutmensekuritas@gmail.com',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'Super Admin',
            'role' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'Audit',
            'role' => 'audit',
            'email' => 'audit@gmail.com',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'Pelamar',
            'role' => 'pelamar',
            'email' => 'pelamar@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $this->call(JurusanSeeder::class);
    }
}