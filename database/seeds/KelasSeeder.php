<?php

use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kelas::insert([
        	'kd_kelas' => 'WD',
        	'nama_kelas' => 'Web Designer',
        	'tgl_mulai' => 2021-05-10,
            'tgl_selesai' => 2021-06-23,
        	'total_jam' => 120
        ]);
    }
}
