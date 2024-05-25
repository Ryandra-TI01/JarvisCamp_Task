<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected static $task = [
        [
            "id"=> 1,
            'name'=>'Tugas Bahasa Inggris',
            'deadline'=> '2024-05-29',
            'status'=>'belum selesai',
            'description'=> 'Mengerjakan tugas bahasa inggris di buku LKS halaman 1 - 200.'
        ],
        [
            "id"=> 2,
            'name'=>'Tugas MTK',
            'deadline'=> '2024-05-29',
            'status'=>'belum selesai',
            'description'=> 'Mengerjakan tugas bahasa inggris di buku LKS halaman 1 - 200.'
        ],
        [
            "id"=> 3,
            'name'=>'Tugas Bahasa Indonesia',
            'deadline'=> '2024-05-29',
            'status'=>'belum selesai',
            'description'=> 'Mengerjakan tugas bahasa inggris di buku LKS halaman 1 - 200.'
        ],
        [
            "id" => 4,
            "name" => "Tugas Fisika",
            "deadline" => "2024-06-02",
            "status" => "belum selesai",
            "description" => "Menghitung soal-soal di buku latihan fisika halaman 50-75."
        ],
        [
            "id" => 5,
            "name" => "Tugas Kimia",
            "deadline" => "2024-06-03",
            "status" => "sudah selesai",
            "description" => "Menulis laporan praktikum kimia tentang reaksi redoks."
        ],
        [
            "id" => 6,
            "name" => "Tugas Biologi",
            "deadline" => "2024-06-04",
            "status" => "belum selesai",
            "description" => "Membuat herbarium dengan koleksi 10 jenis daun."
        ],
        [
            "id" => 7,
            "name" => "Tugas Geografi",
            "deadline" => "2024-06-05",
            "status" => "belum selesai",
            "description" => "Membuat peta kontur dari daerah tempat tinggal."
        ],
        [
            "id" => 8,
            "name" => "Tugas Ekonomi",
            "deadline" => "2024-06-06",
            "status" => "belum selesai",
            "description" => "Menganalisis dampak inflasi terhadap perekonomian."
        ],
        [
            "id" => 9,
            "name" => "Tugas Sosiologi",
            "deadline" => "2024-06-07",
            "status" => "belum selesai",
            "description" => "Membuat laporan penelitian tentang perubahan sosial di masyarakat."
        ]
    ];

    public static function getAll(){
        return self::$task;
    }
}
