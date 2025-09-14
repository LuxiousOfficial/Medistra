<?php

namespace Database\Seeders;

use App\Models\Karir;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KarirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Karir::create([
            'id' => '1',
            'slug' => 'Security',
            'jabatan' => 'Security',
            'jeniskelamin' => 'Pria, Maksimal umur 35 tahun - 40 tahun',
            'pendidikan' => 'Pendidikan minimal SMA/SMK sederajat',
            'pengalaman' => 'Memiliki Serfikat Security yang masih aktif',
            'keahlian' => 'Dapat mengamankan lingkungan kerja dan bersedia bekerja secara shift',
            'kerjasama' => 'Dapat bekerjasama dalam tim ataupun secara mandiri',
            'vaksin' => 'Minimal sudah vaksin Covid-19 dosis ke-2',
            'lokasi' => 'Medan',
            'link' => '/login'
        ]);

        Karir::create([
            'id' => '2',
            'slug' => 'Perawat',
            'jabatan' => 'Perawat',
            'jeniskelamin' => 'Pria/Wanita, Maksimal umur 35 tahun',
            'pendidikan' => 'Pendidikan minimal D3 Keperawatan',
            'pengalaman' => 'emiliki pengalaman minimal 1 tahun pada posisi yang sama',
            'keahlian' => 'Dapat melakukan kegiatan keperawatan dan bertanggung jawab atas pelayan kepada pasien rumah sakit',
            'kerjasama' => 'Dapat bekerjasama dalam tim ataupun secara mandiri',
            'vaksin' => 'Minimal sudah vaksin Covid-19 dosis ke-2',
            'lokasi' => 'Medan',
            'link' => '/login'
        ]);

        Karir::create([
            'id' => '3',
            'slug' => 'Staff Administrasi',
            'jabatan' => 'Staff Administrasi',
            'jeniskelamin' => 'Pria/Wanita, Maksimal umur 35 tahun',
            'pendidikan' => 'Pendidikan minimal S1 Semua Jurusan',
            'pengalaman' => 'Memiliki pengalaman minimal 1 tahun pada posisi yang sama',
            'keahlian' => 'Mampu melakukan kegiatan administrasi secara teratur, cepat dan rapi serta dapat mengguanakan aplikasi MS.Office (Word, Excel dan Power Point)',
            'kerjasama' => 'Dapat bekerjasama dalam tim ataupun secara mandiri',
            'vaksin' => 'Minimal sudah vaksin Covid-19 dosis ke-2',
            'lokasi' => 'Medan',
            'link' => '/login'
        ]);

        Karir::create([
            'id' => '4',
            'slug' => 'Staff BPJS',
            'jabatan' => 'Staff BPJS',
            'jeniskelamin' => 'Pria/Wanita, Maksimal umur 35 tahun',
            'pendidikan' => 'Pendidikan minimal S1 Kesehatan Masyarakat',
            'pengalaman' => 'Memiliki pengalaman minimal 2 tahun pada posisi yang sama',
            'keahlian' => 'Mampu menyusun laporan bulanan terkait di bidang laporan peng-klaiman dengan menggunakan sistem SIMRS',
            'kerjasama' => 'Dapat bekerjasama dalam tim ataupun secara mandiri',
            'vaksin' => 'Minimal sudah vaksin Covid-19 dosis ke-2',
            'lokasi' => 'Medan',
            'link' => '/login'
        ]);

        Karir::create([
            'id' => '5',
            'slug' => 'Kasir',
            'jabatan' => 'Kasir',
            'jeniskelamin' => 'Pria/Wanita, Maksimal umur 35 tahun',
            'pendidikan' => 'Pendidikan minimal S1 Semua Jurusan',
            'pengalaman' => 'Memiliki pengalaman minimal 1 tahun pada posisi yang sama',
            'keahlian' => 'Mampu berkoordinasi dengan anggota tim untuk menyusun strategi keuangan',
            'kerjasama' => 'Dapat bekerjasama dalam tim ataupun secara mandiri',
            'vaksin' => 'Minimal sudah vaksin Covid-19 dosis ke-2',
            'lokasi' => 'Medan',
            'link' => '/login'
        ]);

        Karir::create([
            'id' => '6',
            'slug' => 'IT Support',
            'jabatan' => 'IT Support',
            'jeniskelamin' => 'Pria, Maksimal umur 35 tahun',
            'pendidikan' => 'Pendidikan minimal S1 Sistem Informasi',
            'pengalaman' => 'Memiliki pengalaman minimal 1 tahun pada posisi yang sama',
            'keahlian' => 'Mengerti tentang sistem jaringan LAN, WAN serta dapat melakukan troubleshooting pada software-software perusahaan',
            'kerjasama' => 'Dapat bekerjasama dalam tim ataupun secara mandiri',
            'vaksin' => 'Minimal sudah vaksin Covid-19 dosis ke-2',
            'lokasi' => 'Medan',
            'link' => '/login'
        ]);

        Karir::create([
            'id' => '7',
            'slug' => 'KTU',
            'jabatan' => 'KTU',
            'jeniskelamin' => 'Pria/Wanita, Maksimal umur 35 tahun - 40 tahun',
            'pendidikan' => 'Pendidikan minimal S1 Psikologi/Management',
            'pengalaman' => 'Memiliki pengalaman minimal 2 tahun pada posisi yang sama',
            'keahlian' => 'Memahami tentang Undang-undang Ketenagakerjaan',
            'kerjasama' => 'Dapat bekerjasama dalam tim ataupun secara mandiri',
            'vaksin' => 'Minimal sudah vaksin Covid-19 dosis ke-2',
            'lokasi' => 'Medan',
            'link' => '/login'
        ]);

        Karir::create([
            'id' => '8',
            'slug' => 'Fullstack developer',
            'jabatan' => 'Fullstack developer',
            'jeniskelamin' => 'Pria/Wanita, Maksimal umur 35 tahun - 40 tahun',
            'pendidikan' => 'Pendidikan minimal S1 Teknik Informatika',
            'pengalaman' => 'Memiliki pengalaman minimal 1 tahun pada posisi yang sama',
            'keahlian' => 'Menguasai beberapa bahasa pemrograman seperti Html, Css, Javascript, Php, Mysql Database, Bootstrap dan Framework Laravel, mengerti konsep MVC, OOP, berpengalaman bekerja dengan Web Hosting dan memahami secara baik tentang CRUD',
            'kerjasama' => 'Dapat bekerjasama dalam tim ataupun secara mandiri',
            'vaksin' => 'Minimal sudah vaksin Covid-19 dosis ke-2',
            'lokasi' => 'Medan',
            'link' => '/login'
        ]);

        Karir::create([
            'id' => '9',
            'slug' => 'Director',
            'jabatan' => 'Director',
            'jeniskelamin' => 'Pria, Maksimal umur 35 tahun - 45 tahun',
            'pendidikan' => 'Pendidikan minimal S3 Mars',
            'pengalaman' => 'Memiliki pengalaman minimal 7 tahun pada posisi yang relevan',
            'keahlian' => 'Memiliki jiwa pemimpin dan mengetahui sektor industri',
            'kerjasama' => 'Mampu bekerjasama dalam tim dan dapat berkoordinasi dengan beberapa client',
            'vaksin' => 'Minimal sudah vaksin Covid-19 dosis ke-2',
            'lokasi' => 'Medan',
            'link' => '/login'
        ]);
    }
}
