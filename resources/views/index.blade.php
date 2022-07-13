@extends('layouts.base')

@section('page-title')
    Home Page
@endsection

@section('page-content')
    <h1>Lista treni in partenza</h1>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Codice</th>
            <th scope="col">Stazione Partenza</th>
            <th scope="col">Stazione Arrivo</th>
            <th scope="col">Ora Partenza</th>
            <th scope="col">Ora Arrivo</th>
            <th scope="col">Ritardo</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
            <tr class="{{$train->cancelled ? 'table-danger' : ''}}">
                <td><a href="{{route('show', $train->id)}}">{{$train->code}}</a></td>
                <td>{{$train->station_departure}}</td>
                <td>{{$train->station_arrival}}</td>
                <td>{{$train->cancelled ? 'Cancellato' : $train->time_departure}}</td>
                <td>{{$train->cancelled ? 'Cancellato' : $train->time_arrival}}</td>
                <td>{{$train->on_time ? 'No' : 'Si'}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
@endsection