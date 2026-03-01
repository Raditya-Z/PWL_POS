<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'B01', 'barang_nama' => 'Ciki Taro', 'harga_beli' => 1000, 'harga_jual' => 2000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'B02', 'barang_nama' => 'Roti Tawar', 'harga_beli' => 10000, 'harga_jual' => 12500],
            ['barang_id' => 3, 'kategori_id' => 2, 'barang_kode' => 'B03', 'barang_nama' => 'Aqua 600ml', 'harga_beli' => 2500, 'harga_jual' => 3500],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'B04', 'barang_nama' => 'Teh Botol', 'harga_beli' => 3000, 'harga_jual' => 5000],
            ['barang_id' => 5, 'kategori_id' => 3, 'barang_kode' => 'B05', 'barang_nama' => 'Sabun Mandi', 'harga_beli' => 3000, 'harga_jual' => 4500],
            ['barang_id' => 6, 'kategori_id' => 3, 'barang_kode' => 'B06', 'barang_nama' => 'Shampoo 170ml', 'harga_beli' => 18000, 'harga_jual' => 22000],
            ['barang_id' => 7, 'kategori_id' => 4, 'barang_kode' => 'B07', 'barang_nama' => 'Lampu LED 10W', 'harga_beli' => 25000, 'harga_jual' => 35000],
            ['barang_id' => 8, 'kategori_id' => 4, 'barang_kode' => 'B08', 'barang_nama' => 'Mouse Wireless', 'harga_beli' => 45000, 'harga_jual' => 60000],
            ['barang_id' => 9, 'kategori_id' => 5, 'barang_kode' => 'B09', 'barang_nama' => 'Piring Keramik', 'harga_beli' => 5000, 'harga_jual' => 8500],
            ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => 'B10', 'barang_nama' => 'Gelas Kaca', 'harga_beli' => 4000, 'harga_jual' => 7000],
            ['barang_id' => 11, 'kategori_id' => 1, 'barang_kode' => 'B11', 'barang_nama' => 'Mie Goreng', 'harga_beli' => 2500, 'harga_jual' => 3000],
            ['barang_id' => 12, 'kategori_id' => 2, 'barang_kode' => 'B12', 'barang_nama' => 'Kopi Sachet', 'harga_beli' => 1000, 'harga_jual' => 2000],
            ['barang_id' => 13, 'kategori_id' => 3, 'barang_kode' => 'B13', 'barang_nama' => 'Pasta Gigi', 'harga_beli' => 12000, 'harga_jual' => 15000],
            ['barang_id' => 14, 'kategori_id' => 4, 'barang_kode' => 'B14', 'barang_nama' => 'Keyboard USB', 'harga_beli' => 70000, 'harga_jual' => 95000],
            ['barang_id' => 15, 'kategori_id' => 5, 'barang_kode' => 'B15', 'barang_nama' => 'Sapu Lantai', 'harga_beli' => 15000, 'harga_jual' => 20000],
        ];
        DB::table('m_barang')->insert($data);
    }
}