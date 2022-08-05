@extends('layouts.main')
@section('container')
    <section>
        <div class="formstyle">
            <form name="form1">
                <input class="textview" name="textview" disabled>
            </form>
            <table>
                <tr>
                    <td> <input class="btn" type="button" value="C" onclick="form1.textview.value = ' '"> </td>
                    <td> <input class="btn" type="button" value=""> </td>
                    <td> <input class="btn" type="button" value=""> </td>
                    <td> <input class="btn" type="button" value=""> </td>
                    <td> <input class="btn" type="button" value="^"> </td>
                </tr>

                <tr>
                    <td> <input class="btn" type="button" value="7" onclick="insert(7)"> </td>
                    <td> <input class="btn" type="button" value="8" onclick="insert(8)"> </td>
                    <td> <input class="btn" type="button" value="9" onclick="insert(9)"> </td>
                    <td> <input class="btn" type="button" value="%" onclick="insert('%')"> </td>
                    <td> <input class="btn" type="button" value="->" onclick="backspace()"> </td>
                </tr>

                <tr>
                    <td> <input class="btn" type="button" value="4" onclick="insert(4)"> </td>
                    <td> <input class="btn" type="button" value="5" onclick="insert(5)"> </td>
                    <td> <input class="btn" type="button" value="6" onclick="insert(6)"> </td>
                    <td> <input class="btn" type="button" value="X" onclick="insert('*')"> </td>
                    <td> <input class="btn" type="button" value="÷" onclick="insert('/')"> </td>
                </tr>

                <tr>
                    <td> <input class="btn" type="button" value="1" onclick="insert(1)"> </td>
                    <td> <input class="btn" type="button" value="2" onclick="insert(2)"> </td>
                    <td> <input class="btn" type="button" value="3" onclick="insert(3)"> </td>
                    <td rowspan=5> <input class="btn" style="height: 110px" type="button" value="+"
                            onclick="insert('+')"> </td>
                    <td> <input class="btn" type="button" value="-" onclick="insert('-')"> </td>
                </tr>
                <tr>
                    <td> <input class="btn" type="button" value="0" onclick="insert(0)"> </td>
                    <td> <input class="btn" type="button" value="00" onclick="insert('00')"> </td>
                    <td> <input class="btn" type="button" value="." onclick="insert('.')"> </td>
                    <td> <input class="btn" type="button" value="=" onclick="equal()"> </td>
                </tr>
            </table>
        </div>
    </section>
@endsection