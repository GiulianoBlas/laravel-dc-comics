@extends('main')

@section('main-content')

<div id="edit-container">

      @if ($errors -> any())

        <div class="validation-warning">

          <div>

            <h4>input error</h4>

          </div>

          <ul>

            @foreach ($errors->all() as $error)

              <li>

                {{$error}}

              </li>
                
            @endforeach

          </ul>

        </div>
        
    @endif

    <form action="{{route('comics.update', ['comic'=> $comic->id])}}" method="POST">

        @csrf

        @method('PUT')

        <div>

          <div>

            <label for="title-input">title</label>

            <input type="text" id="title-input" name="title" placeholder=" ex. Bat Man" value="{{$comic->title}}" maxlength="128" required>
          
          </div>

          <div>

              <label for="thumb-input">thumb</label>
    
              <input type="text"  id="thumb-input" name="thumb" placeholder=" insert thumb url" value="{{$comic->thumb}}">
            
          </div>

          <div>
    
                <label for="price-input">price</label>
      
                <input type="number" step="0.01" id="price-input" name="price" placeholder=" ex. 99.99" value="{{$comic->price}}" max="999.99" required >
              
          </div>

          <div>

              <label for="series-input">series</label>
    
              <input type="text"  id="series-input" name="series" placeholder=" ex. Platino" value="{{$comic->series}}" maxlength="128" required>
            
          </div>

          <div>
    
                <label for="date-input">sale date</label>
      
                <input type="text"  id="date-input" name="sale_date" placeholder=" ex. 2020/01/20" value="{{$comic->sale_date}}" minlength="10" maxlength="10">
              
          </div>

          <div>

              <label for="type-input">type</label>
    
              <input type="text"  id="type-input" name="type" placeholder=" ex. Superhero" value="{{$comic->type}}" maxlength="50" required>
            
          </div>

          <div >
    
                <label for="artists-input"> artists</label>
      
                <input type="text"  id="artists-input" name="artists" placeholder=" Insert name of the artist" value="{{$comic->artists}}" required>
              
          </div>

          <div >

              <label for="writers-input">writers</label>
    
              <input type="text"  id="writers-input" name="writers" placeholder=" Insert name of the writers" value="{{$comic->writers}}" required>
            
          </div>

        </div>

        <div>

          <div>

            <label for="description">description</label>
  
            <textarea name="description" id="description" cols="30" rows="5" maxlength="1024" placeholder=" insert description">{{$comic->description}}</textarea>
          
          </div>

          <div class="form-button">

            <button class="edit-button" type="submit">update</button>

          </div>

        </div>

      </form>

</div>
    
@endsection

