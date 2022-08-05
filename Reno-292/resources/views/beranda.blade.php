@extends('layouts.main')
@section('container')
<section class="ac">
    
        
    @foreach ($konten as $data)
        <table>
            
            <tr>
                <th rowspan="4" class="image"><img src="img/konten1.jpg" alt=""></td>
                <td class="titlecon" colspan="2">{{ $data['judul'] }}</td>
            </tr>

            <tr>

                <td class="tanggalcon">Penulis : {{ $data["name"] }}</td>
                <td class="tanggalcon">Tanggal : {{ $data["waktu"] }}</td>
            </tr>
            <tr>
                <td colspan="4" class="konten">{{ $data["isi"] }}</td>
            </tr>
            
        </table>
        @endforeach
    </section>
    
   @endsection

