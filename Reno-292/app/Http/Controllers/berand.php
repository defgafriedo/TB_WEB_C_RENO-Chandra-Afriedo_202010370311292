<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\konten;
use App\Models\varian;
use App\Models\deskripsi;

class berand extends Controller
{
    public function beranda()
    {
        

            $users = konten::join('Users', 'Users.id', '=', 'kontens.id_user')
              ->join('varians', 'varians.id', '=', 'kontens.id_varian')
              ->join('deskripsis', 'deskripsis.id', '=', 'kontens.id_deskripsi')
              ->get(['kontens.*', 'Users.name', 'varians.kategori', 'deskripsis.isi']);

        return view('beranda',
        [
            
            'konten' =>$users
           // 'konten' =>konten::all(),
        ]);
    }
    public function form()
    {
        return view('form');
    }
    public function kalkulator()
    {
        return view('kalkulator');
    }
    public function profil()
    {
        return view('profil');
    }
    public function tables()
    
    {
        $konten = konten::join('Users', 'Users.id', '=', 'kontens.id_user')
        ->join('varians', 'varians.id', '=', 'kontens.id_varian')
        ->join('deskripsis', 'deskripsis.id', '=', 'kontens.id_deskripsi')
        ->get(['kontens.*', 'Users.name', 'varians.kategori', 'deskripsis.isi']);
        
        return view('tables',[
            'konten' =>$konten,
            'user' =>User::all(),
            'varian' =>varian::all(),
            'deskripsi' =>deskripsi::all()
        ]);
    }
    public function watch()
    {
        return view('watch');
    }
}
