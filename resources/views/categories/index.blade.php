@extends('layouts.app')

@section('content')

    <h1>Kategóriák</h1>
    <a href="{{route('categories.create')}}">Új kategória</a>

    @foreach($categories as $category)
        <hr>
        <span>{{$category->name}}</span>
        <a href="{{route('categories.edit', $category->id)}}">Szerkesztés</a>
        <form action="{{route('categories.destroy', $category->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Törlés</button>
        </form>
        <br>
    @endforeach

@endsection
