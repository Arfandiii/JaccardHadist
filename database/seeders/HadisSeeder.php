<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HadisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hadists')->insert([
            [
            'no_hadist'   => 1,
            'isi_hadist'  => 'Sesungguhnya amal itu tergantung pada niatnya, dan sesungguhnya setiap orang akan mendapatkan sesuai dengan niatnya.',
            'kitab_id'    => 1,
            'perawi_id'   => 42, // Umar bin Khattab
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now(),
            ],
            [
            'no_hadist'   => 1,
            'isi_hadist'  => 'Sesungguhnya amal itu tergantung pada niatnya, dan setiap orang berdasarkan niatnya.',
            'kitab_id'    => 3,
            'perawi_id'   => 42, // Umar bin Khattab
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now(),
            ],
            [
            'no_hadist'   => 1,
            'isi_hadist'  => 'Amal itu tergantung niatnya, dan setiap orang mendapatkan sesuai dengan apa yang diniatkannya.',
            'kitab_id'    => 4,
            'perawi_id'   => 42, // Umar bin Khattab
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now(),
            ],
            [
            'no_hadist'   => 1,
            'isi_hadist'  => 'Rasulullah bersabda: “Apabila salah seorang dari kalian bangun dari tidurnya, maka janganlah mencelupkan tangannya ke dalam bejana sampai ia mencucinya tiga kali.”',
            'kitab_id'    => 2,
            'perawi_id'   => 11, // Abu Hurairah
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now(),
            ],
            [
            'no_hadist'   => 1,
            'isi_hadist'  => 'Rasulullah bersabda: "Sesungguhnya amal-amal itu tergantung niatnya..."',
            'kitab_id'    => 6,
            'perawi_id'   => 11, // Abu Hurairah
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now(),
            ],
            [
            'no_hadist'   => 1,
            'isi_hadist'  => 'Rasulullah bersabda, “Permudahlah dan jangan mempersulit, berilah kabar gembira dan jangan membuat orang lari.”',
            'kitab_id'    => 5,
            'perawi_id'   => 21, // Anas bin Malik
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now(),
            ],
            [
            'no_hadist'   => 2,
            'isi_hadist'  => 'Rasulullah bersabda: “Islam dibangun di atas lima perkara: syahadat, salat, zakat, puasa, dan haji.”',
            'kitab_id'    => 1,
            'perawi_id'   => 4, // Abdullah bin Mas’ud
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now(),
            ],
            [
            'no_hadist'   => 2,
            'isi_hadist'  => 'Nabi pernah diminta bagaimana cara berwudhu, maka beliau meminta air lalu berwudhu dan memperlihatkan cara berwudhu kepada mereka.',
            'kitab_id'    => 2,
            'perawi_id'   => 7, // Abdullah bin Zaid
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now(),
            ],
            [
            'no_hadist'   => 2,
            'isi_hadist'  => 'Rasulullah bersabda, “Mukmin yang kuat lebih baik dan lebih dicintai Allah daripada mukmin yang lemah.”',
            'kitab_id'    => 5,
            'perawi_id'   => 11, // Abu Hurairah
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now(),
            ],
            [
            'no_hadist'   => 2,
            'isi_hadist'  => 'Tidaklah salah seorang dari kalian beriman sampai ia mencintai saudaranya sebagaimana ia mencintai dirinya sendiri.',
            'kitab_id'    => 4,
            'perawi_id'   => 21, // Anas bin Malik
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now(),
            ],
            // 11
            [
            'no_hadist'   => 3,
            'isi_hadist'  => 'Sebaik-baik kalian adalah yang belajar Al-Qur’an dan mengajarkannya.',
            'kitab_id'    => 4,
            'perawi_id'   => 11, // Abu Hurairah
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now(),
            ],
            [
            'no_hadist'   => 3,
            'isi_hadist'  => 'Rasulullah bersabda, “Sebaik-baik kalian adalah yang terbaik terhadap keluarganya.”',
            'kitab_id'    => 5,
            'perawi_id'   => 1, // Aisyah
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now(),
            ],
            [
            'no_hadist'   => 4,
            'isi_hadist'  => 'Mintalah pertolongan kepada Allah dan janganlah kalian merasa lemah.',
            'kitab_id'    => 4,
            'perawi_id'   => 4, // Abdullah bin Mas'ud
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now(),
            ],
            [
            'no_hadist'   => 4,
            'isi_hadist'  => 'Rasulullah bersabda, “Islam dibangun atas lima perkara: syahadat, shalat, zakat, puasa, dan haji.”',
            'kitab_id'    => 5,
            'perawi_id'   => 8, // Abdullah bin Umar
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now(),
            ],
            [
            'no_hadist'   => 5,
            'isi_hadist'  => 'Iman itu terdiri atas lebih dari enam puluh cabang. Yang paling utama adalah Laa ilaaha illallah, dan yang paling rendah adalah menyingkirkan duri dari jalan.',
            'kitab_id'    => 1,
            'perawi_id'   => 11, // Abu Hurairah
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now(),
            ],
            [
            'no_hadist'   => 5,
            'isi_hadist'  => 'Barangsiapa yang beriman kepada Allah dan hari akhir hendaklah berkata baik atau diam.',
            'kitab_id'    => 4,
            'perawi_id'   => 11, // Abu Hurairah
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now(),
            ],
            [
            'no_hadist'   => 5,
            'isi_hadist'  => 'Rasulullah bersabda, “Barangsiapa yang beriman kepada Allah dan hari akhir, hendaklah ia berkata baik atau diam.”',
            'kitab_id'    => 5,
            'perawi_id'   => 11, // Abu Hurairah
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now(),
            ],
        ]);
    }
}
