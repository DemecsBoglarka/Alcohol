@extends('layouts.app')

@section('content')

    <h1>Alkoholok</h1>
    <a href="{{ route('alcohols.create') }}">Új alkohol</a>

    @foreach($alcohols as $alcohol)
        <hr>
        <span>Név: {{$alcohol->name}}</span>
        <br>
        <span>Kategória: {{$alcohol->category_id}}</span>
        <br>

        <a href="{{route('alcohols.edit', $alcohol->id)}}">Szerkesztés</a>
        <br>
        <form action="{{route('alcohols.destroy', $alcohol->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Törlés</button>
        </form>
        <br>
    @endforeach
@endsection
