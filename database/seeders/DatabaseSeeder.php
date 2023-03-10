<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // DB::table('users')->insertOrIgnore([
        //     [
        //         'id' => 1,
        //         'nama' => 'Minuman',
        //     ],
        // ]);
        DB::table('kategori')->insertOrIgnore([
            [
                'id' => 1,
                'nama' => 'Minuman',
            ],
            [
                'id' => 2,
                'nama' => 'Pakaian',
                
            ]
        ]);

        DB::table('barang')->insertOrIgnore([
            [
                'id' => 1,
                'kode_barang' => 'BRG0001',
                'nama_barang' => 'Aqua Gelas',
                'id_kategori' => 1,
                'harga' => '2500',
                'jumlah' => 50
            ],
            [
                'id' => 2,
                'kode_barang' => 'BRG0002',
                'nama_barang' => 'Baju',
                'id_kategori' => 2,
                'harga' => '50000',
                'jumlah' => 2
            ]
        ]);
    }
}
