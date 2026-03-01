<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        $id = 1;
        for ($p = 1; $p <= 10; $p++) { // 10 transaksi
            for ($b = 1; $b <= 3; $b++) { // 3 barang per transaksi
                $data[] = [
                    'detail_id' => $id++,
                    'penjualan_id' => $p,
                    'barang_id' => rand(1, 15),
                    'harga' => 15000, 
                    'jumlah' => rand(1, 5),
                ];
            }
        }
        DB::table('t_penjualan_detail')->insert($data);
    }
}