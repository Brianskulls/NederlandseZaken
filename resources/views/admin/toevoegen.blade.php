<!-- Extend from the adminpage layout -->
@extends('layouts.adminpage')

<!-- Everything that comes in the <main> -->
@section('content')

<!-- Form done with Laravelcollective (Laravelcollective.com for documentation) -->
{!! Form::open(['route' => "admin-toevoegen", 'method' => 'POST']) !!}

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

  {!! Form::submit('Toevoegen', ['class' => '']) !!}
{!! Form::close() !!}
@endsection