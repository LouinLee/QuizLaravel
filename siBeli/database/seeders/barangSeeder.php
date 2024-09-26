<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'kd_barang' => '0001',
                'nama_barang' => 'Product A',
                'satuan' => 'pieces',
                'harga_jual' => 15000,
                'harga_beli' => 10000,
                'stok' => 50,
                'status' => true,
            ],
            [
                'kd_barang' => '0002',
                'nama_barang' => 'Product B',
                'satuan' => 'units',
                'harga_jual' => 30000,
                'harga_beli' => 20000,
                'stok' => 30,
                'status' => true,
            ],
            [
                'kd_barang' => '0003',
                'nama_barang' => 'Product C',
                'satuan' => 'boxes',
                'harga_jual' => 45000,
                'harga_beli' => 35000,
                'stok' => 20,
                'status' => true,
            ],
            [
                'kd_barang' => '0004',
                'nama_barang' => 'Product D',
                'satuan' => 'units',
                'harga_jual' => 60000,
                'harga_beli' => 50000,
                'stok' => 10,
                'status' => false,
            ],
            [
                'kd_barang' => '0005',
                'nama_barang' => 'Product E',
                'satuan' => 'boxes',
                'harga_jual' => 80000,
                'harga_beli' => 70000,
                'stok' => 25,
                'status' => true,
            ],
            [
                'kd_barang' => '0006',
                'nama_barang' => 'Product F',
                'satuan' => 'pieces',
                'harga_jual' => 120000,
                'harga_beli' => 90000,
                'stok' => 15,
                'status' => true,
            ],
            [
                'kd_barang' => '0007',
                'nama_barang' => 'Product G',
                'satuan' => 'units',
                'harga_jual' => 95000,
                'harga_beli' => 80000,
                'stok' => 40,
                'status' => false,
            ],
            [
                'kd_barang' => '0008',
                'nama_barang' => 'Product H',
                'satuan' => 'pieces',
                'harga_jual' => 110000,
                'harga_beli' => 95000,
                'stok' => 5,
                'status' => true,
            ],
            [
                'kd_barang' => '0009',
                'nama_barang' => 'Product I',
                'satuan' => 'boxes',
                'harga_jual' => 130000,
                'harga_beli' => 110000,
                'stok' => 60,
                'status' => true,
            ],
            [
                'kd_barang' => '0010',
                'nama_barang' => 'Product J',
                'satuan' => 'units',
                'harga_jual' => 200000,
                'harga_beli' => 150000,
                'stok' => 30,
                'status' => false,
            ],
        ];

        // Insert products into the barang table
        DB::table('barangs')->insert($products);
    }
}
