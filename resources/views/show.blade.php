@extends('layouts.base')

@section('page-title')
    Treno {{$train->code}}
@endsection

@section('page-content')
    <h1>Treno - {{$train->code}} - {{$train->company}}</h1>
    <h2>{{$train->station_departure}} - {{$train->station_arrival}}</h2>
    <h3>Totale vagoni: {{$train->wagon}}</h3>
@endsection