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
            'photo' => 'cover-buku/687b4796f2f87.png',
            ],
            [
            'judul' => "Al-Quran Hadis",
            'penerbit' => 'Direktorat Pendidikan Madrasah, Direktorat Pendidikan Islam, Kemenag RI',
            'pengarang' => 'Dr. H. Muslihu, M.Ed',
            'tahun_terbit' => '2015',
            'stock' => 1,
            'photo' => 'cover-buku/687b4a04347f0.png',
            ],
            [
            'judul' => "Al-Quran Hadis",
            'penerbit' => 'Direktorat Pendidikan Madrasah, Direktorat Pendidikan Islam, Kemenag RI',
            'pengarang' => 'Dr. H. Muslihu, M.Ed',
            'tahun_terbit' => '2014',
            'stock' => 1,
            'photo' => 'cover-buku/687b4a09ed274.png',
            ],
            [
            'judul' => "Al-Quran Hadis",
            'penerbit' => 'Direktorat Pendidikan Madrasah, Direktorat Pendidikan Islam, Kemenag RI',
            'pengarang' => 'Dr. H. Muslihu, M.Ed',
            'tahun_terbit' => '2015',
            'stock' => 1,
            'photo' => 'cover-buku/687b4a1173e9a.png',
            ],
            [
            'judul' => "Al-Quran Hadis",
            'penerbit' => 'Direktorat Pendidikan Madrasah, Direktorat Pendidikan Islam, Kemenag RI',
            'pengarang' => 'Dr. H. Muslihu, M.Ed',
            'tahun_terbit' => '2019',
            'stock' => 1,
            'photo' => null,
            ],
            [
            'judul' => "Ulumul Hadis",
            'penerbit' => 'Teras',
            'pengarang' => 'Dr. Muhammad Al-Fatih Surya Belaga DKK',
            'tahun_terbit' => '2010',
            'stock' => 1,
            'photo' => 'cover-buku/687b49951976b.png',
            ],
            [
            'judul' => "Al-Quran Hadis (10)",
            'penerbit' => 'Direktorat Pendidikan Madrasah, Direktorat Pendidikan Islam, Kemenag RI',
            'pengarang' => 'Mukarrom Faisal Rosidin, Hj. Siti Mahfudhah, H. Dudung Basori, Alwi',
            'tahun_terbit' => '2019',
            'stock' => 16,
            'photo' => 'cover-buku/687b477e214a5.png',
            ],
            [
            'judul' => "Al-Quran Hadist (11)",
            'penerbit' => 'Direktorat Pendidikan Madrasah Dir. Jenderal Pendidikan Islam, Kemenag RI',
            'pengarang' => 'Mukarrom Faisal Rosidin, Dudung Alwi, Siti Mahfudhah',
            'tahun_terbit' => '2015',
            'stock' => 139,
            'photo' => 'cover-buku/687b4743cc245.png',
            ],
            [
            'judul' => "Al-Quran Hadis (12)",
            'penerbit' => 'Direktorat Pendidikan Madrasah, Direktorat Pendidikan Islam, Kemenag RI',
            'pengarang' => "Jami'",
            'tahun_terbit' => '2016',
            'stock' => 12,
            'photo' => 'cover-buku/687b4784f207e.png',
            ],
            [
            'judul' => "Pengantar Studi Ilmu Hadist",
            'penerbit' => 'Pustaka Al-Kautsar',
            'pengarang' => 'Dr. Mustofa Hasan, M.Ag',
            'tahun_terbit' => '2005',
            'stock' => 1,
            'photo' => 'cover-buku/687b48599c6c3.png',
            ],
            [
            'judul' => "Ulumul Hadis",
            'penerbit' => 'Teras',
            'pengarang' => 'Dr. Beni Ahmad Sobani, M.Si',
            'tahun_terbit' => '2015',
            'stock' => 1,
            'photo' => 'cover-buku/687b498f54681.png',
            ],
            [
            'judul' => "Al-Qur'an Hadist (10)",
            'penerbit' => 'Direktorat Pendidikan Madrasah, Direktorat Pendidikan Islam, Kemenag RI',
            'pengarang' => 'Elfa Tsurayya, S.Ag., M.Pd.I',
            'tahun_terbit' => '2020',
            'stock' => 1,
            'photo' => 'cover-buku/687b469ce1e67.jpeg',
            ],
            [
            'judul' => "Al-Qur'an Hadist (10)",
            'penerbit' => 'Karya Toha Putra',
            'pengarang' => 'Minanul Aziz, Aziun Yunun',
            'tahun_terbit' => '2009',
            'stock' => 1,
            'photo' => null,
            ],
            [
            'judul' => "Ulumul Hadis",
            'penerbit' => 'Teras',
            'pengarang' => 'Dr. M. Al-Fatih Suryadilaga',
            'tahun_terbit' => '2010',
            'stock' => 1,
            'photo' => null,
            ],
            [
            'judul' => "Kumpulan Hadis Shahih",
            'penerbit' => 'Darul Hadis Qudsiyah',
            'pengarang' => 'Muhammad Fuad Ibrahim',
            'tahun_terbit' => '2009',
            'stock' => 1,
            'photo' => 'cover-buku/687b482606af6.png',
            ],
            [
            'judul' => "Syarah Hadis",
            'penerbit' => 'Sinar Baru Algensindo',
            'pengarang' => 'Al-Imam Al-Qardhawi',
            'tahun_terbit' => '2019',
            'stock' => 1,
            'photo' => null,
            ],
            [
            'judul' => "Studi Qur'an dan Hadis",
            'penerbit' => 'Pustaka Setia',
            'pengarang' => 'Dr. H. Ahmad Suganda, M.Ag',
            'tahun_terbit' => '2018',
            'stock' => 1,
            'photo' => null,
            ],
            [
            'judul' => "Hadis Tarbawi",
            'penerbit' => 'Teras',
            'pengarang' => 'Sumargono',
            'tahun_terbit' => '2017',
            'stock' => 1,
            'photo' => 'cover-buku/687b473242e05.png',
            ],
            [
            'judul' => "Terjemah Hadis Mengenai Pribadi & Budi Pekerti Rasulullah S.A.W.",
            'penerbit' => 'CV. Penerbit Alfonso Goro',
            'pengarang' => 'Imam Al-Tirmidhi',
            'tahun_terbit' => '-',
            'stock' => 1,
            'photo' => 'cover-buku/687b4914657c3.png',
            ],
        ]);
    }
}
