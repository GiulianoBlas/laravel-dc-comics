@extends('main')

@section('main-content')

<div id="create-container">

    <form action="{{route('comics.store')}}" method="POST">

        @csrf

        <div>

          <div>

            <label for="title-input">title</label>

            <input type="text" id="title-input" name="title" placeholder=" ex. Bat Man">
          
          </div>

          <div>

              <label for="thumb-input">thumb</label>
    
              <input type="text"  id="thumb-input" name="thumb" placeholder=" insert thumb url">
            
            </div>

            <div>
    
                <label for="price-input">price</label>
      
                <input type="number" step="0.01" id="price-input" name="price" placeholder=" ex. 99.99">
              
            </div>

            <div>

              <label for="series-input">series</label>
    
              <input type="text"  id="series-input" name="series" placeholder=" ex. Platino">
            
            </div>

            <div>
    
              <label for="date-input">sale date</label>
    
              <input type="text"  id="date-input" name="sale_date" placeholder=" ex. 2020-01-20">
              
            </div>

            <div>

              <label for="type-input">type</label>
    
              <input type="text"  id="type-input" name="type" placeholder=" ex. Novel">
            
            </div>

            <div>
    
              <label for="artists-input"> artists</label>
    
              <input type="text"  id="artists-input" name="artists" placeholder=" Insert name of the artist/s">
              
            </div>

            <div>

              <label for="writers-input">writers</label>
    
              <input type="text"  id="writers-input" name="writers" placeholder=" Insert name of the writer/s">
            
            </div>

        </div>

        <div>

            <div>

              <label for="description">description</label>
    
              <textarea name="description" id="description" cols="30" rows="5" maxlength="1024" placeholder=" insert description"></textarea>
              
            </div>

            <div class="form-button">

              <button class="create-button" type="submit">create</button>
    
            </div>

        </div>

      </form>

</div>
    
@endsection

