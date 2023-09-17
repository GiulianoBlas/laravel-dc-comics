@extends('main')

@section('main-content')

<div id="show-container">

    <div id="comic-slot">

        <div id='img-container'>

            <img src="{{$comic->thumb}}" alt="">

        </div>

        <div id="info-container">

            <div>

                <span>title</span>
    
                <h3>{{$comic->title}}</h3>
    
            </div>
    
            <div>
    
                <span>series</span>
    
                <span>{{$comic->series}}</span>
    
            </div>
    
            <div>
    
                <span>type</span>
    
                <span>{{$comic->type}}</span>
    
            </div>
    
            <div>
    
                <span>price</span>
    
                <span>{{$comic->price}}$</span>
    
            </div>

            <div>
    
                <span>description</span>
    
                <p>{{$comic->description}}</p>
    
            </div>

        </div>

    </div>

</div>
    
@endsection

