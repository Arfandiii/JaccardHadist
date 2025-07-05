<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KitabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('kitab')->insert([
            ['nama_kitab' => 'Shahih Muslim'],
            ['nama_kitab' => 'Sunan Abu Dawud'],
            ['nama_kitab' => 'Shahih Bukhari'],
            ['nama_kitab' => 'Jami’ At-Tirmidzi'],
            ['nama_kitab' => 'Sunan An-Nasa’i'],
            ['nama_kitab' => 'Sunan Ibnu Majah'],
        ]);
    }
}
