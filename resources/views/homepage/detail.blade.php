<!-- Extend from the homepage layout -->
@extends('layouts.homepage')

<!-- Title of this web page -->
@section('title')
    Agenda | Nederlandse Zaken
@endsection

<!-- Everything that comes in the <main> -->
@section('content')
    <h1>{{$id}}</h1>
    <h1>{{$evenementen->beschrijving}}</h1>

@endsection
