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
            ['judul' => 'Buku 1', 'penerbit' => 'Penerbit 1', 'pengarang' => 'Pengarang 1', 'tahun_terbit' => '2022', 'stock' => 10,],
            ['judul' => 'Buku 2', 'penerbit' => 'Penerbit 2', 'pengarang' => 'Pengarang 2', 'tahun_terbit' => '2021', 'stock' => 8],
            ['judul' => 'Buku 3', 'penerbit' => 'Penerbit 3', 'pengarang' => 'Pengarang 3', 'tahun_terbit' => '2020', 'stock' => 12],
            ['judul' => 'Buku 4', 'penerbit' => 'Penerbit 4', 'pengarang' => 'Pengarang 4', 'tahun_terbit' => '2019', 'stock' => 7],
            ['judul' => 'Buku 5', 'penerbit' => 'Penerbit 5', 'pengarang' => 'Pengarang 5', 'tahun_terbit' => '2018', 'stock' => 15],
            ['judul' => 'Buku 6', 'penerbit' => 'Penerbit 6', 'pengarang' => 'Pengarang 6', 'tahun_terbit' => '2017', 'stock' => 9],
            ['judul' => 'Buku 7', 'penerbit' => 'Penerbit 7', 'pengarang' => 'Pengarang 7', 'tahun_terbit' => '2016', 'stock' => 11],
            ['judul' => 'Buku 8', 'penerbit' => 'Penerbit 8', 'pengarang' => 'Pengarang 8', 'tahun_terbit' => '2015', 'stock' => 6],
            ['judul' => 'Buku 9', 'penerbit' => 'Penerbit 9', 'pengarang' => 'Pengarang 9', 'tahun_terbit' => '2014', 'stock' => 13],
            ['judul' => 'Buku 10', 'penerbit' => 'Penerbit 10', 'pengarang' => 'Pengarang 10', 'tahun_terbit' => '2013', 'stock' => 5],
            ['judul' => 'Buku 11', 'penerbit' => 'Penerbit 11', 'pengarang' => 'Pengarang 11', 'tahun_terbit' => '2012', 'stock' => 14],
            ['judul' => 'Buku 12', 'penerbit' => 'Penerbit 12', 'pengarang' => 'Pengarang 12', 'tahun_terbit' => '2011', 'stock' => 10],
            ['judul' => 'Buku 13', 'penerbit' => 'Penerbit 13', 'pengarang' => 'Pengarang 13', 'tahun_terbit' => '2010', 'stock' => 8],
            ['judul' => 'Buku 14', 'penerbit' => 'Penerbit 14', 'pengarang' => 'Pengarang 14', 'tahun_terbit' => '2009', 'stock' => 12],
            ['judul' => 'Buku 15', 'penerbit' => 'Penerbit 15', 'pengarang' => 'Pengarang 15', 'tahun_terbit' => '2008', 'stock' => 7],
            ['judul' => 'Buku 16', 'penerbit' => 'Penerbit 16', 'pengarang' => 'Pengarang 16', 'tahun_terbit' => '2007', 'stock' => 15],
            ['judul' => 'Buku 17', 'penerbit' => 'Penerbit 17', 'pengarang' => 'Pengarang 17', 'tahun_terbit' => '2006', 'stock' => 9],
            ['judul' => 'Buku 18', 'penerbit' => 'Penerbit 18', 'pengarang' => 'Pengarang 18', 'tahun_terbit' => '2005', 'stock' => 11],
            ['judul' => 'Buku 19', 'penerbit' => 'Penerbit 19', 'pengarang' => 'Pengarang 19', 'tahun_terbit' => '2004', 'stock' => 6],
            ['judul' => 'Buku 20', 'penerbit' => 'Penerbit 20', 'pengarang' => 'Pengarang 20', 'tahun_terbit' => '2003', 'stock' => 13],
        ]);
    }
}
