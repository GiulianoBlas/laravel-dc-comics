@extends('main')

@section('main-content')

<div id="create-container">

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

    <form action="{{route('comics.store')}}" method="POST">

        @csrf

        <div>

          <div>

            <label for="title-input">title</label>

            <input type="text" id="title-input" name="title" placeholder=" ex. Bat Man" maxlength="128" required value="{{old('title')}}">
          
          </div>

          <div>

              <label for="thumb-input">thumb</label>
    
              <input type="text"  id="thumb-input" name="thumb" placeholder=" insert thumb url" value="{{old('thumb')}}">
            
            </div>

            <div>
    
                <label for="price-input">price</label>
      
                <input type="number" step="0.01" id="price-input" name="price" placeholder=" ex. 99.99" max="999.99" required  value="{{old('price')}}">
              
            </div>

            <div>

              <label for="series-input">series</label>
    
              <input type="text"  id="series-input" name="series" placeholder=" ex. Platino" maxlength="128" required value="{{old('series')}}">
            
            </div>

            <div>
    
              <label for="date-input">sale date</label>
    
              <input type="text"  id="date-input" name="sale_date" placeholder=" ex. 2020-01-20" minlength="10" maxlength="10" value="{{old('sale_date')}}">
              
            </div>

            <div>

              <label for="type-input">type</label>
    
              <input type="text"  id="type-input" name="type" placeholder=" ex. Novel" maxlength="50" required value="{{old('type')}}">
            
            </div>

            <div>
    
              <label for="artists-input"> artists</label>
    
              <input type="text"  id="artists-input" name="artists" placeholder=" Insert name of the artist/s" required value="{{old('artists')}}">
              
            </div>

            <div>

              <label for="writers-input">writers</label>
    
              <input type="text"  id="writers-input" name="writers" placeholder=" Insert name of the writer/s" required  value="{{old('writers')}}">
            
            </div>

        </div>

        <div>

            <div>

              <label for="description">description</label>
    
              <textarea name="description" id="description" cols="30" rows="5" maxlength="1024" placeholder=" insert description" required value="{{old('description')}}" ></textarea>
              
            </div>

            <div class="form-button">

              <button class="create-button" type="submit">create</button>
    
            </div>

        </div>

      </form>

</div>
    
@endsection

