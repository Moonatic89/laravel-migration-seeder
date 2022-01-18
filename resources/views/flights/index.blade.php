@extends('layouts.app')

@section('content')

<div class="title d_flex">
    <h1>Lista dei voli disponibili:</h1>
</div>
<div class="container d_flex ">

    @foreach ($flights as $flight)

    <div class="flightCard d_flex">

        <div class="destination">
            <h3>Destinazione</h3>
            {{$flight->destination}}
        </div>

        <div class="airline">
            <h3>Linea Aerea</h3>
            {{$flight->airline}}
        </div>

        <div class="departure">
            <h3>Partenza il:</h3>
            {{$flight->departure}}
        </div>

        <div class="arrival">
            <h3>Arrivo il:</h3>
            {{$flight->arrival}}
        </div>

        <div class="stops">
            <h3>Scali:</h3>
            @if ($flight->stops === 1)
            Si
            @else
            No
            @endif
        </div>


    </div>
    @endforeach


</div>

@endsection