<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jabatan')->insert([
            ['id' => 1, 'nama_jabatan' => 'Administrasi'],
            ['id' => 2, 'nama_jabatan' => 'Kebersihan'],
            ['id' => 3, 'nama_jabatan' => 'SDM'],
            ['id' => 4, 'nama_jabatan' => 'Perawat'],
            ['id' => 5, 'nama_jabatan' => 'Bidan'],
            ['id' => 6, 'nama_jabatan' => 'Kebersihan & Laundry'],
            ['id' => 7, 'nama_jabatan' => 'Tenaga Teknik Kefarmasian'],
            ['id' => 8, 'nama_jabatan' => 'Gizi'],
            ['id' => 9, 'nama_jabatan' => 'Apoteker'],
            ['id' => 10, 'nama_jabatan' => 'Dokter Spesialis Kandungan dan Penyakit'],
            ['id' => 11, 'nama_jabatan' => 'Dokter Spesialis Anak'],
            ['id' => 12, 'nama_jabatan' => 'Direktur'],
            ['id' => 13, 'nama_jabatan' => 'Keamanan'],
            ['id' => 14, 'nama_jabatan' => 'Dokter Spesialis Anestesi'],
            ['id' => 15, 'nama_jabatan' => 'Dokter Umum'],
            ['id' => 16, 'nama_jabatan' => 'Pelaksana Gizi'],
            ['id' => 17, 'nama_jabatan' => 'Rekam Medis'],
            ['id' => 18, 'nama_jabatan' => 'Sopir'],
            ['id' => 19, 'nama_jabatan' => 'IT'],
            ['id' => 20, 'nama_jabatan' => 'Satpam'],
            ['id' => 21, 'nama_jabatan' => 'Radiografer'],
            ['id' => 22, 'nama_jabatan' => 'Dokter Spesialis Kandungan'],
            ['id' => 23, 'nama_jabatan' => 'Security'],
            ['id' => 24, 'nama_jabatan' => 'Dokter Spesialis Dalam'],
            ['id' => 25, 'nama_jabatan' => 'Fisioterapi'],
            ['id' => 26, 'nama_jabatan' => 'CS'],
            ['id' => 27, 'nama_jabatan' => 'ATLM'],
            ['id' => 28, 'nama_jabatan' => 'KESLING'],
            ['id' => 29, 'nama_jabatan' => 'Dokter Spesialis Neurologi'],
            ['id' => 30, 'nama_jabatan' => 'Wakil Direktur'],
            ['id' => 31, 'nama_jabatan' => 'CASEMIX'],
            ['id' => 32, 'nama_jabatan' => 'Kabid Keperawatan'],
            ['id' => 33, 'nama_jabatan' => 'Marketing'],
            ['id' => 34, 'nama_jabatan' => 'Dokter Spesialis Mata'],
            ['id' => 35, 'nama_jabatan' => 'Dokter Spesialis Radiologi'],
            ['id' => 36, 'nama_jabatan' => 'Dokter Spesialis Bedah'],
            ['id' => 37, 'nama_jabatan' => 'Keuangan'],
            ['id' => 38, 'nama_jabatan' => 'Admin'],
            ['id' => 39, 'nama_jabatan' => 'PPR'],
            ['id' => 40, 'nama_jabatan' => 'Kabid Umum',],
            ['id' => 41, 'nama_jabatan' => 'Sopir/Umum',],
            ['id' => 42, 'nama_jabatan' => 'Dokter Spesialis Orthopedi',],
        ]);
    }
}
