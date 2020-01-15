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



        {{--            @foreach($evenementen as $i=>$evenement)--}}

        {{--                <tr>--}}
        {{--                    <td>{{ $i + 1 }}</td>--}}
        {{--                    <td>{{ $evenement->naam }}</td>--}}
        {{--                    <td>{{ $evenement->datum }}</td>--}}
        {{--                    <td>{{ $evenement->created_at }}</td>--}}
        {{--                    <td>{{ $evenement->updated_at }}</td>--}}
        {{--                    <td><a data-js="open-edit"><span id="{{ $evenement->id }}">Edit</span></a></td>--}}
        {{--                    <td><a data-js="open-remove"><span id="{{ $evenement->id }}">Remove</span></a></td>--}}
        {{--                </tr>--}}

        {{--            @endforeach--}}

        <div class="evenementenGrid">

            @foreach($evenementen as $i=>$evenement)

                <div class="event">
                    <div class="eventImg">
                        <h2>200 x 300</h2>
                        <img src="{{Storage::url($evenement->imagepad)}}" alt="">
                    </div>
                    <h2 class="eventTitle">{{ $evenement->naam }}</h2>
                    <div class="eventData">
                        <p class="eventDate">{{ $evenement->datum }}</p><p>{{ $evenement->begintijd }}</p>
                        <p class="eventLocation">{{ $evenement->locatie }}</p>
                    </div>
                </div>

            @endforeach

        </div>

    @endif


@endsection
