@extends('layouts.main')
@section('container')
    <section class="bb">
        <table>
            <form action="output.php" method="post">
                <h1>Registration Form</h1>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="text" id="input" name="nama" placeholder="Masukkan Nama">     
                        <?php
                        if(isset($_GET['nama'])){
                            if($_GET['nama']=="null"){
                                echo ('<a class="validasi">Name Is required</a>');
                            }
                        }
                        ?>          
                    </td>
                </tr>
                <tr>
                    <td>Nim</td>
                    <td>
                        <input type="text" id="input" name="nim" placeholder="Masukkan NIM">
                        <?php
                        if(isset($_GET['nim'])){
                            if($_GET['nim']=="null"){
                                echo ('<a class="validasi">NIM Is required</a>');
                            }
                        }
                        ?>          
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="text" id="input" name="email" placeholder="Masukkan E-Mail">
                        <?php
                        if(isset($_GET['email'])){
                            if($_GET['email']=="null"){
                                echo ('<a class="validasi">EMAIL Is required</a>');
                            }
                        }
                        ?>    
                    </td>
                </tr>
                <tr>
                    <td>Tanggal lahir</td>
                    <td>
                        <input type="date" id="lahir" name="lahir">
                        <?php
                        if(isset($_GET['tanggal'])){
                            if($_GET['tanggal']=="null"){
                                echo ('<a class="validasi">TANGGAL LAHIR Is required</a>');
                            }
                        }
                        ?>    
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        Laki laki<input type="radio" id="JK" name="jk" value="Laki-Laki">
                        Perempuan<input type="radio" id="JK" name="jk" value="Perempuan">
                        <?php
                        if(isset($_GET['jk'])){
                            if($_GET['jk']=="null"){
                                echo ('<a class="validasi">GENDER Is required</a>');
                            }
                        }
                        ?>    
                    </td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td>
                        Renang <input type="checkbox" name="hobi1">
                        Olahraga<input type="checkbox" name="hobi2">
                        Bermain Musik<input type="checkbox" name="hobi3">
                        <?php
                        if(isset($_GET['hobi'])){
                            if($_GET['hobi']=="null"){
                                echo ('<a class="validasi">HOBI Is required</a>');
                            }
                        }
                        ?>    
                    </td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td>
                        <textarea name="desc" id="desc" cols="30" rows="3"></textarea>
                        <?php
                        if(isset($_GET['desc'])){
                            if($_GET['desc']=="null"){
                                echo ('<a class="validasi">DESKRIPSI Is required</a>');
                            }
                        }
                        ?>    
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit"></td>
                </tr>
            </form>
        </table>
    </section>
    @endsection