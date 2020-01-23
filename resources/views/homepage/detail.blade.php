<!-- Extend from the homepage layout -->
@extends('layouts.homepage', ['bodyColor' => $evenementen->bodyColor, 'headerColor' => $evenementen->headerColor])

<!-- Title of this web page -->
@section('title')
    Agenda | Nederlandse Zaken
@endsection

<!-- Everything that comes in the <main> -->
@section('content')


    <div class="detail">

        <div class="header" style="background-image: url('{{Storage::url($evenementen->imagepad)}}')">


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
                    <div class="count">{{$id}}/ @if($evenementen->totalTicket !== 0 ) {{$evenementen->totalTicket}} @else {{'Not Set'}} @endif</div>
                </div>
            </div>

            <div class="programma">
                <div class="programmaList">
                    <h1>Programma</h1>
                </div>

                <hr>

                <div class="info">
                    <h1>Info</h1>
                    <div class="listItem">
                        <h2>Datum</h2>
                        <p>{{$evenementen->datum}}</p>
                    </div>

                    <div class="listItem">
                        <h2>Locatie</h2>
                        <p>{{$evenementen->locatie}}</p>
                    </div>

                    <div class="listItem">
                        <h2>Prijs</h2>
                        <p>@if( $evenementen->eventPrice !== 0.00 ) {{"€" . $evenementen->eventPrice}} @else {{'Gratis'}} @endif</p>
                    </div>
                </div>
            </div>
            <div class="congres">
                <h1>Congress</h1>
            </div>


        </div>
    </div>

@endsection
