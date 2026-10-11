@extends('layouts.app')

@section('content')
<h1>Új kategória</h1>

  <form action="{{route('categories.store')}}" method="POST">
      @csrf

      <label for="name">Kategória neve</label>
      <input type="text" name="name" id="name" value="{{old('name')}}" required>
      @error('name')
          <div class="error">{{$message}}</div>
      @enderror

      <button type="submit">Hozzáadás</button>
      <a href="{{route('categories.index')}}">Mégse</a>
  </form>
@endsection
