<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('buku')->insert([
            [
                'judul' => "Hadis Qudsi dan Hadis Arba'in",
                'penerbit' => 'CV. Sagung Sebo',
                'pengarang' => 'Ali Imron. S.I. H. Abdul Halim, MA',
                'tahun_terbit' => '2011',
                'stock' => 3,
            ],
            [
                'judul' => "Al-Quran Hadis",
                'penerbit' => 'Direktorat Pendidikan Madrasah, Direktorat Pendidikan Islam, Kemenag RI',
                'pengarang' => 'Dr. H. Muslihu, M.Ed',
                'tahun_terbit' => '2015',
                'stock' => 1,
            ],
            [
                'judul' => "Al-Quran Hadis",
                'penerbit' => 'Direktorat Pendidikan Madrasah, Direktorat Pendidikan Islam, Kemenag RI',
                'pengarang' => 'Dr. H. Muslihu, M.Ed',
                'tahun_terbit' => '2014',
                'stock' => 1,
            ],
            [
                'judul' => "Al-Quran Hadis",
                'penerbit' => 'Direktorat Pendidikan Madrasah, Direktorat Pendidikan Islam, Kemenag RI',
                'pengarang' => 'Dr. H. Muslihu, M.Ed',
                'tahun_terbit' => '2015',
                'stock' => 1,
            ],
            [
                'judul' => "Al-Quran Hadis",
                'penerbit' => 'Direktorat Pendidikan Madrasah, Direktorat Pendidikan Islam, Kemenag RI',
                'pengarang' => 'Dr. H. Muslihu, M.Ed',
                'tahun_terbit' => '2019',
                'stock' => 1,
            ],
            [
                'judul' => "Ulumul Hadis",
                'penerbit' => 'Teras',
                'pengarang' => 'Dr. Muhammad Al-Fatih Surya Belaga DKK',
                'tahun_terbit' => '2010',
                'stock' => 1,
            ],
            [
                'judul' => "Al-Quran Hadis (10)",
                'penerbit' => 'Direktorat Pendidikan Madrasah, Direktorat Pendidikan Islam, Kemenag RI',
                'pengarang' => 'Mukarrom Faisal Rosidin, Hj. Siti Mahfudhah, H. Dudung Basori, Alwi',
                'tahun_terbit' => '2019',
                'stock' => 16,
            ],
            [
                'judul' => "Al-Quran Hadist (11)",
                'penerbit' => 'Direktorat Pendidikan Madrasah Dir. Jenderal Pendidikan Islam, Kemenag RI',
                'pengarang' => 'Mukarrom Faisal Rosidin, Dudung Alwi, Siti Mahfudhah',
                'tahun_terbit' => '2015',
                'stock' => 139,
            ],
            [
                'judul' => "Al-Quran Hadis (12)",
                'penerbit' => 'Direktorat Pendidikan Madrasah, Direktorat Pendidikan Islam, Kemenag RI',
                'pengarang' => "Jami'",
                'tahun_terbit' => '2016',
                'stock' => 12,
            ],
            [
                'judul' => "Pengantar Studi Ilmu Hadist",
                'penerbit' => 'Pustaka Al-Kautsar',
                'pengarang' => 'Dr. Mustofa Hasan, M.Ag',
                'tahun_terbit' => '2005',
                'stock' => 1,
            ],
            [
                'judul' => "Ulumul Hadis",
                'penerbit' => 'Teras',
                'pengarang' => 'Dr. Beni Ahmad Sobani, M.Si',
                'tahun_terbit' => '2015',
                'stock' => 1,
            ],
            [
                'judul' => "Al-Qur'an Hadist (10)",
                'penerbit' => 'Direktorat Pendidikan Madrasah, Direktorat Pendidikan Islam, Kemenag RI',
                'pengarang' => 'Elfa Tsurayya, S.Ag., M.Pd.I',
                'tahun_terbit' => '2020',
                'stock' => 1,
            ],
            [
                'judul' => "Al-Qur'an Hadist (10)",
                'penerbit' => 'Karya Toha Putra',
                'pengarang' => 'Minanul Aziz, Aziun Yunun',
                'tahun_terbit' => '2009',
                'stock' => 1,
            ],
            [
                'judul' => "Ulumul Hadis",
                'penerbit' => 'Teras',
                'pengarang' => 'Dr. M. Al-Fatih Suryadilaga',
                'tahun_terbit' => '2010',
                'stock' => 1,
            ],
            [
                'judul' => "Kumpulan Hadis Shahih",
                'penerbit' => 'Darul Hadis Qudsiyah',
                'pengarang' => 'Muhammad Fuad Ibrahim',
                'tahun_terbit' => '2009',
                'stock' => 1,
            ],
            [
                'judul' => "Syarah Hadis",
                'penerbit' => 'Sinar Baru Algensindo',
                'pengarang' => 'Al-Imam Al-Qardhawi',
                'tahun_terbit' => '2019',
                'stock' => 1,
            ],
            [
                'judul' => "Studi Qur'an dan Hadis",
                'penerbit' => 'Pustaka Setia',
                'pengarang' => 'Dr. H. Ahmad Suganda, M.Ag',
                'tahun_terbit' => '2018',
                'stock' => 1,
            ],
            [
                'judul' => "Hadis Tarbawi",
                'penerbit' => 'Teras',
                'pengarang' => 'Sumargono',
                'tahun_terbit' => '2017',
                'stock' => 1,
            ],
            [
                'judul' => "Terjemah Hadis Mengenai Pribadi & Budi Pekerti Rasulullah S.A.W.",
                'penerbit' => 'CV. Penerbit Alfonso Goro',
                'pengarang' => 'Imam Al-Tirmidhi',
                'tahun_terbit' => '-',
                'stock' => 1,
            ],
        ]);
    }
}
