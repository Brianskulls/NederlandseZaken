<!-- Extend from the homepage layout -->
@extends('layouts.homepage', ['bodyColor' => $evenementen->bodyColor, 'headerColor' => $evenementen->headerColor])

<!-- Title of this web page -->
@section('title')
    Agenda | Nederlandse Zaken
@endsection

<!-- Everything that comes in the <main> -->
@section('content')


    <div class="detail">

        <div class="header">

        </div>

        <div class="wrapper">
            <div class="title">
                <h1>{{$evenementen->naam}}</h1>

                <div class="date">
                    <h2>{{$evenementen->datum}}</h2>
                </div>
            </div>

            <div class="description">
                <div class="text">
                    <h1>{{$evenementen->beschrijving}}</h1>
                    <div class="bar"></div>
                    <div class="hint">
                        Stel hier onder uw ticket samen
                    </div>
                </div>

                <div class="tickets">
                    <p>Aantal tickets verkrijgbaar</p><div class="bar"></div>
                    <div class="count">{{$id}}/ 150</div>
                </div>
            </div>

            <div class="programma"></div>
            <div class="congres"></div>


        </div>
    </div>

@endsection
