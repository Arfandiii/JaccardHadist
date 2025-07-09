<?php

namespace Database\Seeders;

use App\Models\Perawi;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Super Admin',
            'username' => 'superadmin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $this->call(KitabSeeder::class);
        $this->call(PerawiSeeder::class);
        $this->call(HadisSeeder::class);
        $this->call(BukuSeeder::class);

    }
}
