<?php

use Illuminate\Database\Seeder;
use App\Pegawai;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // clear table
        Pegawai::truncate(); 
        // penambahan data 1
        Pegawai::create( [
            'nama'  => 'Firman Sidik' ,
            'nip' => '198011262011011001' ,
            'id_jabatan' => '1' ,
            'id_golongan' => '1' ,
            'id_ruang' => '1' ,
            'tempat_lahir' => 'Samarinda' ,
            'tanggal_lahir' => '1992/12/12' ,
            'opd' => 'Badan' ,
            'gelar_depan' => '' ,
            'gelar_belakang' => '' ,
        ] );
        // penambahan data 2
        Pegawai::create( [
            'nama'  => 'Sidik Ginanjar' ,
            'nip' => '198011262011011001' ,
            'id_jabatan' => '1' ,
            'id_golongan' => '1' ,
            'id_ruang' => '1' ,
            'tempat_lahir' => 'Samarinda' ,
            'tanggal_lahir' => '1992/12/12' ,
            'opd' => 'Badan' ,
            'gelar_depan' => '' ,
            'gelar_belakang' => '' ,
        ] );
        // penambahan data 3
        Pegawai::create( [
            'nama'  => 'Muhammad Ginanjar' ,
            'nip' => '198011262011011001' ,
            'id_jabatan' => '1' ,
            'id_golongan' => '1' ,
            'id_ruang' => '1' ,
            'tempat_lahir' => 'Samarinda' ,
            'tanggal_lahir' => '1992/12/12' ,
            'opd' => 'Badan' ,
            'gelar_depan' => '' ,
            'gelar_belakang' => '' ,
        ] );
    }
}
