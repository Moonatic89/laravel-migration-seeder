@extends('layouts.app')

@section('content')

<div class="title d_flex">
    <h1>Lista dei voli disponibili:</h1>
</div>

<div class="container">

    <div class="row">

        @foreach ($flights as $flight)

        <div class="col-3 text-white">

            <div class="flightCard bg-image" style="background-image: url('{{$flight->image}}')">

                <div class="destination">
                    <h3>Destinazione</h3>
                    {{$flight->destination}}
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

        </div>
        @endforeach
    </div>

</div>

@endsection