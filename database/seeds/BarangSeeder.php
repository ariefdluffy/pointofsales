<?php

use Illuminate\Database\Seeder;
use App\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // clear table
       Barang::truncate(); 
       // penambahan data 1
       Barang::create( [
           'kode_barang' => 'BRG-000001' ,
           'nama_barang' => 'Rinso' ,
           'merk_brand' => 'PT. Unilever' ,
           'model_type' => 'Cair' ,
           'berat_bruto' => '300' ,
           'ukuran_volume' => '20cm x 20cm' ,
           'warna' => 'Merah' ,
           'id_kategori' => '1' ,
           'id_subkategori' => '1' ,
           'id_rak' => '1' ,
           'harga_beli' => '27000' ,
           'jml_minimal' => '5' ,
           'jml_maksimal' => '200' ,
           'stok' => '100' ,
           'ppn' => '10' ,
           'kode_satuan' => 'bks' ,
           'ket' => 'Keterangan Barang' ,
           'foto_barang' => '' ,
           'status_jual' => 'ya' ,
           'id_user' => '2' ,
       ] );
       Barang::create( [
        'id_barang'  => '2' ,
        'kode_barang' => 'BRG-000002' ,
        'nama_barang' => 'Minyak Wangi' ,
        'merk_brand' => 'Caplang' ,
        'model_type' => 'Cair' ,
        'berat_bruto' => '50' ,
        'ukuran_volume' => '10cm x 5cm' ,
        'warna' => 'Hijau' ,
        'id_kategori' => '2' ,
        'id_subkategori' => '2' ,
        'id_rak' => '1' ,
        'harga_beli' => '7000' ,
        'jml_minimal' => '5' ,
        'jml_maksimal' => '200' ,
        'stok' => '100' ,
        'ppn' => '10' ,
        'kode_satuan' => 'bh' ,
        'ket' => 'Keterangan Barang' ,
        'foto_barang' => '' ,
        'status_jual' => 'ya' ,
        'id_user' => '2' ,
    ] );
    }
}
