@extends('layout')

@section('title', 'Home')

@section('main')
    <h1>DVDs</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Genre</th>
                <th>Rating</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dvds as $dvd)
                <tr>
                    <td>
                        <a href="/dvds/{{$dvd->id}}">{{$dvd->title}}</a>
                    </td>
                    <td>{{$dvd->genre->name}}</td>
                    <td>{{$dvd->rating->name}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
