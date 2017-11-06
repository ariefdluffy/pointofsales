<?php

use Illuminate\Database\Seeder;
use App\Pegawai;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('BarangSeeder');     
        // $this->call(UsersTableSeeder::class);
    }
}
