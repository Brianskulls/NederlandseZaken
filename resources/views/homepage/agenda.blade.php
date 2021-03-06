<!-- Extend from the homepage layout -->
@extends('layouts.homepage')

<!-- Title of this web page -->
@section('title')
    Agenda | Nederlandse Zaken
@endsection

<!-- Everything that comes in the <main> -->
@section('content')


    <!-- Table that shows all the events
     Contains buttons to remove and edit -->
    @if(count($evenementen) > 0)

        <div class="title">
            <h1>Evenementen</h1>
        </div>

    <div class="wrapper">
        <div class="evenementenGrid">

            @foreach($evenementen as $i=>$evenement)

                <div class="event" onclick="window.location = 'evenementen/{{$evenement->id}}' ">
                    <img class="eventImg" src="{{Storage::url($evenement->imagepad)}}" alt="">
                    <div class="eventBody">
                        <h2 class="eventTitle">{{ $evenement->naam }}</h2>
                        <span @if (isset($evenement->accentColor)) style="background-color: {{$evenement->accentColor}}" @endif class="line"></span>
                        <p>{{ $evenement->beschrijving }}</p>
                    </div>

                    <hr>

                    <div class="eventFooter">
                        <p class="eventDate">{{ $evenement->datum }}</p>
                        <p class="eventLocation">{{ $evenement->locatie }}</p>
                    </div>
                </div>

            @endforeach



        </div>
        {{ $evenementen->links() }}
    </div>



    @endif


@endsection
