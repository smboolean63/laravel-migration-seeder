@extends('layouts.base')

@section('page-title')
    Lista treni cancellati
@endsection

@section('page-content')
    <h1>Lista treni cancellati</h1>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Codice</th>
            <th scope="col">Stazione Partenza</th>
            <th scope="col">Stazione Arrivo</th>
            <th scope="col">Ora Partenza</th>
            <th scope="col">Ora Arrivo</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
            <tr>
                <td><a href="{{route('show', $train->id)}}">{{$train->code}}</a></td>
                <td>{{$train->station_departure}}</td>
                <td>{{$train->station_arrival}}</td>
                <td>{{$train->time_departure}}</td>
                <td>{{$train->time_arrival}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
@endsection