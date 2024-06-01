<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    //mendefinisikan data 

    protected static $tasks = [
        
        [
        
            'id' => '1',
            'name' => 'Bahasa Inggris',
            'deadline' => '2024-02-12',
            'status' => 'Belum Mengerjakan',
            'description' => 'Kerjakan Tugas Bahasa Inggris di buku LKS halaman 12',
        ],[

            'id' => '2',
            'name' => 'Matematika',
            'deadline' => '2024-09-12',
            'status' => 'Belum Mengerjakan',
            'description' => 'Kerjakan Tugas Matematika di buku LKS halaman 12',
        ],[

            'id' => '3',
            'name' => 'Fisika',
            'deadline' => '2024-10-12',
            'status' => 'Belum Mengerjakan',
            'description' => 'kerjakan pr fisika halaman 20-23',
        ],[
            'id' => '4',
            'name' => 'Kimia',
            'deadline' => '2024-10-12',
            'status' => 'Sudah Mengerjakan',
            'description' => 'lorezzz',

        ]


    ];


    //method untuk menambahkan semua data tugas 

    public static function getAll(){
        return self::$tasks;
    }
}
