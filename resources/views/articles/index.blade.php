@extends('layouts.app')

@section('content')

<div class="title d_flex">
    <h1>Posts & Articoli</h1>
</div>

<div class="container">

    <div class="row">

        @foreach ($articles as $article)

        <div class="col-3 text-white">

            <div class="articleCard text-dark bg-image" style="background-image: url('{{$article->image}}')">

                <div class="title">
                    <h3>{{$article->title}}</h3>
                </div>

                <div class="departure">
                    <h3>{{$article->text}}</h3>
                </div>

            </div>

        </div>
        @endforeach
    </div>

</div>


@endsection