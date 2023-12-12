<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            'nama'=> 'Aldiansyah Kurniawan',
            'nisn'=> '0005011111',
            'jeniskelamin'=> 'laki-laki',
            'nohandphone'=> '083841368525',
            'email'=> 'aldi.dewan.id',
        ]);
    }
}
