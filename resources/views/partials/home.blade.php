@extends('main')

@section('main-content')

<div id="home-container">

    <div id="comics-showcase">

        @foreach ($comics as $comic)

        <a href="{{route('comics.show', ['comic'=> $comic->id])}}">
            
            <div class="comic-slot">

                <div class="comic-thumb">

                    <img src="{{$comic['thumb']}}" alt="">

                </div>

                <div class="comic-title">

                    <h3>{{$comic['title']}}</h3>

                </div>

                <div class="comic-price">

                    {{$comic['price']}} $

                </div>

            </div>

        </a>

        @endforeach

    </div>

</div>
    
@endsection

