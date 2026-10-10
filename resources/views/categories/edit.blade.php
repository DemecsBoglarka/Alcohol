@extends('layouts.app')

@section('title', __('Kategória nevének módosítása'))

@section('content')
<h1>Kategória nevének módosítása</h1>
  <form action="{{route('categories.update', $category->id)}}" method="POST">
      @csrf
      @method('PATCH')

      <label for="name">Kategória neve</label>
      <input type="text" name="name" id="name" value="{{old('name', $category->name)}}" required>

      <button type="submit">Mentés</button>
      <a href="{{route('categories.index')}}">Mégse</a>
  </form>
@endsection
