<?php

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke tabel siswa
        DB::table('siswa')->insert([
            'no_pendaftaran' => '',
            'nama_siswa' => 'Mutiara',
            'alamat_siswa' => 'Dumai',
            'email_siswa' => 'mutiarara321@gmail.com'

        ]);
    }
}
