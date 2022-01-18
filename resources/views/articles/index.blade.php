@extends('layouts.app')

@section('content')

<div class="title d_flex">
    <h1>Lista dei voli disponibili:</h1>
</div>
<div class="container d_flex ">

    @foreach ($articles as $article)

    <div class="flightCard d_flex">

        <div class="destination">
            <h3>Titolo</h3>
            {{$article->title}}
        </div>

        <div class="airline">
            <h3>Testo</h3>
            {{$article->text}}
        </div>

        <div class="departure">
            <h3>Creato il:</h3>
            {{$article->creation_date}}
        </div>

        <div class="arrival">
            <h3>Votato:</h3>
            {{$article->vote}}
        </div>

    </div>
    @endforeach


</div>

@endsection