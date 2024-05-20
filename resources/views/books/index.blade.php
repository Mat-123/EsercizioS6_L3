@extends('templates.base')

@section('title', 'Libreria - Lista Libri')

@section('content')
<h1>Books list</h1>



@if ($books->count())
<table class="table table-striped">
    
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Price</th>
            <th scope="col">Created_at</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $books as $book )
          <tr>
            <th scope="row">{{$book->id}}</th>
            <td>{{$book->title}}</td>
            <td>{{$book->author}}</td>
            <td>{{$book->price}}</td>
            <td>{{$book->created_at}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
@else
    <h2>Non ci sono libri</h2>
@endif
@endsection