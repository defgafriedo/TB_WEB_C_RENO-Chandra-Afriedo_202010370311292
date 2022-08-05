<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jenis;
use App\Models\Identity;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Jenis::create([
            'jenis_buku' => 1,
            'jenis_buku' => 'Fisika',
        ]);

        Identity::create([
            'nama_identity' => 'Pemrograman Web',
        ]);
        Identity::create([
            'nama_identity' => 'Pemrograman Mobile',
        ]);
        Identity::create([
            'nama_identity' => 'Pemrograman Desktop',
        ]);
        Identity::create([
            'nama_identity' => 'Pemrograman Hybrd',
        ]);


        // books::create([
        //     'title' => 'Book1',
        //     'writer' => 'Reno',
        //     'summary' => 'halo semua',
        //     'price' => '2101201',
        //     'photo' => 'logo.jpg',
        //     'id_jenis' => 1,
        // ]);
        // books::create([
        //     'title' => 'Book2',
        //     'writer' => 'Reno2',
        //     'summary' => 'halo semua',
        //     'price' => '2101201',
        //     'photo' => 'logo.jpg',
        //     'id_jenis' => 1,
        // ]);
        // books::create([
        //     'title' => 'Book3',
        //     'writer' => 'Reno3',
        //     'summary' => 'halo semua',
        //     'price' => '2101201',
        //     'photo' => 'logo.jpg',
        //     'id_jenis' => 1,
        // ]);
        // books::create([
        //     'title' => 'Book4',
        //     'writer' => 'Reno4',
        //     'summary' => 'halo semua',
        //     'price' => '2101201',
        //     'photo' => 'logo.jpg',
        //     'id_jenis' => 1,
        // ]);
        // books::create([
        //     'title' => 'Book5',
        //     'writer' => 'Reno5',
        //     'summary' => 'halo semua',
        //     'price' => '2101201',
        //     'photo' => 'logo.jpg',
        //     'id_jenis' => 1,
        // ]);
        // Isbn::create([
        //     'id_isbn' => 1,
        //     'no_isbn' => 'DMR_1_SI1',
        // ]);
        // Isbn::create([
        //     'id_isbn' => 2,
        //     'no_isbn' => 'DMR_2_SI2',
        // ]);
        // Isbn::create([
        //     'id_isbn' => 3,
        //     'no_isbn' => 'DMR_3_SI3',
        // ]);
        // Isbn::create([
        //     'id_isbn' => 4,
        //     'no_isbn' => 'DMR_4_SI4',
        // ]);
        // Isbn::create([
        //     'id_isbn' => 5,
        //     'no_isbn' => 'DMR_5_SI5',
        // ]);
        
    }
}
