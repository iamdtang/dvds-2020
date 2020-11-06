@extends('layout')

@section('title', $dvd->title)

@section('main')
    <h1>{{$dvd->title}}</h1>
@endsection
