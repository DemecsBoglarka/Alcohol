@extends('layouts.app')

@section('content')

    <h1>Kategória</h1>
    <a href="{{route('categories.create')}}">Új kategória</a>

    @foreach($categories as $category)
        <p>{{$category->name}}</p>

        <a href="{{route('categories.edit', $category->id)}}">Szerkesztés</a>
        <form action="{{route('categories.destroy', $categiry->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Törlés</button>
        </form>
    @endforeach

@endsection
