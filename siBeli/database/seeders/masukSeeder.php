<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class masukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Membuat beberapa entri masuk
        $masuks = [
            [
                'kd_masuk' => 'PO001',
                'tgl_masuk' => now(),
                'kd_supplier' => 1,
                'total_masuk' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kd_masuk' => 'PO002',
                'tgl_masuk' => now(),
                'kd_supplier' => 2,
                'total_masuk' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kd_masuk' => 'PO003',
                'tgl_masuk' => now(),
                'kd_supplier' => 3,
                'total_masuk' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('masuks')->insert($masuks);
    }
}
