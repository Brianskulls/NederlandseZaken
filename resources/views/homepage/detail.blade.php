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
                <h1 @if (isset($evenementen->accentColor)) style="color: {{$evenementen->accentColor}}" @endif>{{$evenementen->naam}}</h1>

                <div class="date">
                    <h2>{{$evenementen->datum}}</h2>
                </div>
            </div>

            <div class="description">
                <div class="text">
                    <h1 @if (isset($evenementen->accentColor)) style="color: {{$evenementen->accentColor}}" @endif>{{$evenementen->beschrijving}}</h1>
                    <div @if (isset($evenementen->accentColor)) style="background-color: {{$evenementen->accentColor}}" @endif class="bar"></div>
                    <div class="hint">
                        Stel hier onder uw ticket samen
                    </div>
                </div>

                @if($evenementen->laatAantalTicketsZien == true)
                <div class="tickets">
                    <p>Aantal tickets verkrijgbaar</p>
                    <div class="bar" @if (isset($evenementen->accentColor)) style="background-color: {{$evenementen->accentColor}}" @endif></div>
                    <div class="count" @if (isset($evenementen->accentColor)) style="color: {{$evenementen->accentColor}}" @endif>{{$evenementen->totalTicket-$evenementen->aantalGekochteTickets}}/ {{$evenementen->totalTicket}}</div>
                </div>
                    @endif
            </div>

            <div class="programma">
                <div class="programmaList">
                    <h1>Programma</h1>
                </div>

                <hr>

                <div class="info">
                    <h1>Info</h1>
                    <div class="listItem">
                        <h2 @if (isset($evenementen->accentColor)) style="color: {{$evenementen->accentColor}}" @endif>Datum</h2>
                        <p>{{$evenementen->datum}}</p>
                    </div>

                    <div class="listItem">
                        <h2 @if (isset($evenementen->accentColor)) style="color: {{$evenementen->accentColor}}" @endif>Locatie</h2>
                        <p>{{$evenementen->locatie}}</p>
                    </div>

                    <div class="listItem">
                        <h2 @if (isset($evenementen->accentColor)) style="color: {{$evenementen->accentColor}}" @endif>Prijs</h2>
                        <p>@if( $evenementen->eventPrice !== 0.00 ) {{"€" . $evenementen->eventPrice}} @else {{'Gratis'}} @endif</p>
                    </div>
                </div>
            </div>
            <div class="congres">
                <h1>Congress</h1>
            </div>

            <div class="inschrijven">

            </div>

            <div class="geselecteerde">
                <h1>Geselecteerde<br>Sprekers</h1>
            </div>


        </div>
    </div>

@endsection
