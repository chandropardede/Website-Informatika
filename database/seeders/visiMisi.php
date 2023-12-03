<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class visiMisi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('misi')->insert([

            [
                'misi'=> "Menyelenggarakan pendidikan teknik informatika yang bermutu, profesional dan diperhitungkan secara nasional.",
            ],
            [
                'misi'=> "Menyelenggarakan penelitian yang menghasilkan dan memanfaatkan teknologi untuk mengembangkan potensi lokal.",
            ],
            [
                'misi'=> "Melakukan pengabdian kepada masyarakat dalam bidang teknik informatika.",
            ],
        ]);   
        DB::table('visi')->insert([
        	'visi'=>"Menjadi program Teknik Informatika yang unggul yang berperan dalam menghasilkan dan memanfaatkan teknologi untuk mengembangkan potensi lokal bagi kemajuan bangsa pada tahun 2023.",
        ]);   
        DB::table('sejarah')->insert([
        	'sejarah'=>"Program Studi S1 Teknik Informatika merupakan salah satu dari 4 (empat) program studi di bawah Fakultas Teknik Informatika dan Elektro di Institut Teknologi Del. Program studi ini dibentuk “ Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate quam vitae purus efficitur pulvinar id a lectus. Phasellus at magna.

            Prodi S1 Informatika ini di rancang sejak tahun 2013 dan beroperasi pada tahun 2014 bersama dengan 2 prodi lainnya yaitu prodi S1 Teknik Elektro dan S1 Sistem Informasi. Ketiga prodi ini tergabung dalam 1 fakultas yaitu FITE (Fakultas Teknik Elektro dan Informatika).
            
            Fakultas ini berdiri pada tahun 2013 seiring dengan perubahan Politeknik Informatika Del (PI Del) menjadi Institut Teknologi Del (IT Del).",
        ]);  
    }
}
