@extends('layouts.main')
@section('container')
    <section class="wtch">
        <h1 >MOVIES WATCH LIST</h1>
        <input type="text" class="movie-name" placeholder="Movie Name">
        <input type="text" class="movie-rating" placeholder="Movie Rating">
        <button class="add">Add Movie</button>
        <input type="text" class="search" placeholder="Search Movie">
        <table>
            <thead>
                <th class="sort-name">Movie Name</th>
                <th class="sort-rating">Movie Rating</th>
                <th>Action</th>
            </thead>
            <tbody>
                <tr class="table-item">
                    <td class="name">spongebob</td>
                    <td class="rating">8.5</td>
                    <td class="delete">DELETE</td>
                </tr>
                <tr class="table-item">
                    <td class="name">doraemon</td>
                    <td class="rating">9.4</td>
                    <td class="delete">DELETE</td>
                </tr>
            </tbody>
        </table>
    </section>
@endsection
