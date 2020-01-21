<!-- Extend from the adminpage layout -->
@extends('layouts.adminpage')

<!-- Everything that comes in the <main> -->
@section('content')

    <!-- Including the alert -->
    @include ('layouts.partials.alert')

    <!-- Form done with Laravelcollective (Laravelcollective.com for documentation) -->
    {!! Form::open(['route' => "admin-toevoegen", 'method' => 'POST', 'files' => true]) !!}

    {!! Form::label('evenementNaam', 'Naam evenement') !!}
    {!! Form::text('evenementNaam', '', ['class' => '']) !!}<br>

    {!! Form::label('evenementBeschrijving', 'Beschrijving evenement') !!}
    {!! Form::text('evenementBeschrijving', '', ['class' => '']) !!}<br>

    {!! Form::label('evenementSamenvatting', 'Samenvatting evenement') !!}
    {!! Form::text('evenementSamenvatting', '', ['class' => '']) !!}<br>

    {!! Form::label('evenementLocatie', 'Locatie evenement') !!}
    {!! Form::text('evenementLocatie', '', ['class' => '']) !!}<br>

    {!! Form::label('evenementDatum', 'Datum evenement') !!}
    {!! Form::date('evenementDatum', '', ['class' => '']) !!}<br>

    {!! Form::label('evenementBegintijd', 'Begintijd evenement') !!}
    {!! Form::time('evenementBegintijd', '', ['class' => '']) !!}<br>

    {!! Form::label('evenementEindtijd', 'Eindtijd evenement') !!}
    {!! Form::time('evenementEindtijd', '', ['class' => '']) !!}<br>

    {!! Form::label('evenementImage', 'Plaatje evenement') !!}
    {!! Form::file('evenementImage') !!}<br>

    {!! Form::label('evenementBodyColor', 'Kleur body van evenement') !!}
    {!! Form::color('evenementBodyColor') !!}<br>

    {!! Form::label('evenementHeaderColor', 'Kleur header van evenement') !!}
    {!! Form::color('evenementHeaderColor') !!}<br>

    {!! Form::submit('Toevoegen', ['class' => '']) !!}
    {!! Form::close() !!}
@endsection
