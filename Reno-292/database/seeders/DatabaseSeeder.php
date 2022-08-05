<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\konten;
use App\Models\User;
use App\Models\varian;
use App\Models\deskripsi;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'reno',
        //     'password' => 'edo',
        //     'created_at' => '2022-06-15 00:00:00',
        //     'updated_at' => '2022-06-15 00:00:00',
        // ]);
        User::create([
            'name' => 'reno',
            'password' => 'edo',
            'created_at' => '2022-06-15 00:00:00',
            'updated_at' => '2022-06-15 00:00:00',
        ]);
        User::create([
            'name' => 'Nanang',
            'password' => 'Dodit',
            'created_at' => '2022-06-15 00:00:00',
            'updated_at' => '2022-06-15 00:00:00',
        ]);
        User::create([
            'name' => 'Dina',
            'password' => 'Lala',
            'created_at' => '2022-06-15 00:00:00',
            'updated_at' => '2022-06-15 00:00:00',
        ]);
        varian::create([
            'kategori' => '300',
            'created_at' => '2022-06-15 00:00:00',
            'updated_at' => '2022-06-15 00:00:00',
        ]);
        
        varian::create([
            'kategori' => '400',
            'created_at' => '2022-06-15 00:00:00',
            'updated_at' => '2022-06-15 00:00:00',
        ]);
        varian::create([
            'kategori' => '500',
            'created_at' => '2022-06-15 00:00:00',
            'updated_at' => '2022-06-15 00:00:00',
        ]);

        deskripsi::create([
            'isi' => 'Mengadopsi DNA YAMAHA R-SERIES yang SPORTY dengan lampu utama ganda yang tajam, bodi belakang runcing dan ramping, serta fairing aerodinamis yang kekar',
            'created_at' => '2022-06-15 00:00:00',
            'updated_at' => '2022-06-15 00:00:00',
        ]);
        deskripsi::create([
            'isi' => '
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil dolores reprehenderit a? Vel in error eius porro! Eos, enim sit?',
            'created_at' => '2022-06-15 00:00:00',
            'updated_at' => '2022-06-15 00:00:00',
        ]);
        deskripsi::create([
            'isi' => 'Mengadopsi DNA YAMAHA R-SERIES yang SPORTY dengan lampu utama ganda yang tajam, bodi belakang runcing dan ramping, serta fairing aerodinamis yang kekar.',
            'created_at' => '2022-06-15 00:00:00',
            'updated_at' => '2022-06-15 00:00:00',
        ]);
        konten::create([
            'id_user' => '1',
            'id_varian' => '1',
            'id_deskripsi' => '1',
            'judul' => 'New Varian Kelas 150 CC',
            'key' => '150cc',
            'waktu' => '2022-06-01',
            'created_at' => '2022-06-15 00:00:00',
            'updated_at' => '2022-06-15 00:00:00',
        ]);
        konten::create([
            'id_user' => '2',
            'id_varian' => '2',
            'id_deskripsi' => '2',
            'judul' => 'Torsi R25 nyaman dari sebelumnya',
            'key' => '125cc',
            'waktu' => '2022-06-01',
            'created_at' => '2022-06-15 00:00:00',
            'updated_at' => '2022-06-15 00:00:00',
        ]);
        konten::create([
            'id_user' => '3',
            'id_varian' => '3',
            'id_deskripsi' => '3',
            'judul' => 'X ride Dengan Tampilan Baru',
            'key' => '600cc',
            'waktu' => '2022-06-01',
            'created_at' => '2022-06-15 00:00:00',
            'updated_at' => '2022-06-15 00:00:00',
        ]);
    }
}
