@extends('main')

@section('main-content')

<div id="index-container">

    <table> 

        <thead>   

        <tr>

            <th>id</th>

            <th>title</th> 

            <th>price</th>

            <th>series</th>

            <th>sale date</th>

            <th>type</th>

            <th>artists</th>

            <th>writers</th>

            <th id="add-comics">

                <a href="{{route('comics.create')}}">

                    <i class="fa-solid fa-plus"></i>

                </a>
                
            </th>
        
        </tr>

        </thead>

        <tbody>

            @foreach ($comics as $comic)

            <tr>

                <td>{{$comic->id}}</td>

                <td>{{$comic->title}}</td>   

                <td>{{$comic->price}} $</td>

                <td>{{$comic->series}}</td>

                <td>{{$comic->sale_date}}</td>

                <td>{{$comic->type}}</td>

                <td>{{$comic->artists}}</td>

                <td>{{$comic->writers}}</td>

                <td class="buttons-container">

                    <a href="{{route('comics.show', ['comic'=> $comic->id])}}">show</a>

                    <a href="{{route('comics.edit', ['comic'=> $comic->id])}}">edit</a>

                    <form action="{{route('comics.destroy', ['comic'=> $comic->id])}}" method="post">

                        @csrf

                        @method('DELETE')

                        <button type="submit">delete</button>

                    </form>

                </td>

            </tr>

            @endforeach
        
        </tbody>

    </table>

</div>
    
@endsection

