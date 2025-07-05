<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerawiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('perawi')->insert([
            ['nama_perawi' => 'Abdullah bin Abbas'],             // sahabat, banyak riwayat (±1.660) :contentReference[oaicite:1]{index=1}
            ['nama_perawi' => 'Abdullah bin Amr bin al-As'],     // jelas berbeda dari Ibn Umar :contentReference[oaicite:2]{index=2}
            ['nama_perawi' => 'Abdullah bin Khubaib'],
            ['nama_perawi' => 'Abdullah bin Mas’ud'],
            ['nama_perawi' => 'Abdullah bin Salam'],
            ['nama_perawi' => 'Abdullah bin Umar'],              // Ibn Umar, anak Umar, ±2.630 riwayat :contentReference[oaicite:3]{index=3}
            ['nama_perawi' => 'Abdullah bin Zaid'],
            ['nama_perawi' => 'Abu Bakrah'],
            ['nama_perawi' => 'Abu Darda’'],
            ['nama_perawi' => 'Abu Dzar Al-Ghifari'],
            ['nama_perawi' => 'Abu Hurairah'],                   // perawi terbanyak, ±5.374 :contentReference[oaicite:4]{index=4}
            ['nama_perawi' => 'Abu Malik Al-Asy’ari'],
            ['nama_perawi' => 'Abu Mas’ud Al-Badri'],
            ['nama_perawi' => 'Abu Musa al-Asy’ari'],
            ['nama_perawi' => 'Abu Qatadah'],
            ['nama_perawi' => 'Abu Sa’id Al-Khudri'],
            ['nama_perawi' => 'Abu Umamah Al-Bahili'],
            ['nama_perawi' => 'Adi bin Hatim'],
            ['nama_perawi' => 'Aisyah'],                         // saja, cukup
            ['nama_perawi' => 'Ali bin Abi Thalib'],
            ['nama_perawi' => 'Anas bin Malik'],
            ['nama_perawi' => 'Buraidah bin Al-Hushaib'],
            ['nama_perawi' => 'Fatimah binti Qais'],
            ['nama_perawi' => 'Hakim bin Hizam'],
            ['nama_perawi' => 'Hudzaifah bin Yaman'],
            ['nama_perawi' => 'Jabir bin Abdullah'],
            ['nama_perawi' => 'Jarir bin Abdullah'],
            ['nama_perawi' => 'Khabbab bin Al-Aratt'],
            ['nama_perawi' => 'Ma’qil bin Yasar'],
            ['nama_perawi' => 'Mahmud bin Labid'],
            ['nama_perawi' => 'Mu’adz bin Jabal'],
            ['nama_perawi' => 'Muhajir bin Qunfudz'],
            ['nama_perawi' => 'Nu’man bin Basyir'],
            ['nama_perawi' => 'Sa’ad bin Abi Waqqash'],
            ['nama_perawi' => 'Sahl bin Sa’ad'],
            ['nama_perawi' => 'Salman Al-Farisi'],
            ['nama_perawi' => 'Sufyan bin Abdullah'],
            ['nama_perawi' => 'Suhaib Ar-Rumi'],
            ['nama_perawi' => 'Ubadah bin Shamit'],
            ['nama_perawi' => 'Umar bin Abi Salamah'],
            ['nama_perawi' => 'Umar bin Khattab'],
            ['nama_perawi' => 'Ummu Habibah'],
            ['nama_perawi' => 'Ummu Salamah'],
            ['nama_perawi' => 'Usamah bin Zaid'],
            ['nama_perawi' => 'Utsman bin Affan'],
            ['nama_perawi' => 'Zaid bin Khalid'],
            ['nama_perawi' => 'Zaid bin Tsabit'],
        ]);
    }
}
