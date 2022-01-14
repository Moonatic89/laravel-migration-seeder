@extends('layouts.app')

@section('content')

<div class="container d_flex ">

    @foreach ($flights as $flight)

    <div class="flightCard">

        <div class="destination">
            <h3>Destinazione</h3>
            {{$flight->destination}}
        </div>


    </div>
    @endforeach


</div>

@endsection