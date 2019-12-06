<!-- Extend from the adminpage layout -->
@extends('layouts.adminpage')

<!-- Everything that comes in the <main> -->
@section('content')

<!-- Table that shows all the events
     Contains buttons to remove and edit -->
@if(count($evenementen) > 0)
<table>

  <tr>
    <th>ID</th>
    <th>Naam</th>
    <th>Datum</th>
    <th>Created At</th>
    <th>Updated At</th>
    <th>Edit</th>
    <th>Remove</th>
  </tr>

  @foreach($evenementen as $i=>$evenement)

  <tr>
    <td>{{ $i + 1 }}</td>
    <td>{{ $evenement->naam }}</td>
    <td>{{ $evenement->datum }}</td>
    <td>{{ $evenement->created_at }}</td>
    <td>{{ $evenement->updated_at }}</td>
    <td><a data-js="open-edit"><span id="{{ $evenement->id }}">Edit</span></a></td>
    <td><a data-js="open-remove"><span id="{{ $evenement->id }}">Remove</span></a></td>
  </tr>

  @endforeach

</table>
@endif

@endsection
