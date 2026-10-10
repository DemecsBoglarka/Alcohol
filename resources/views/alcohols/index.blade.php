@extends('layouts.app')

@section('content')

    <h1>Alkoholok</h1>
    <a href="{{ route('alcohols.create') }}">Új alkohol</a>

    @foreach($alcohols as $alcohol)
        <p>{{$alcohol->name}}</p>

        <a href="{{route('alcohols.edit', $alcohol->id)}}">Szerkesztés</a>
        <form action="{{route('alcohols.destroy', $alcohol->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Törlés</button>
        </form>
    @endforeach
@endsection
