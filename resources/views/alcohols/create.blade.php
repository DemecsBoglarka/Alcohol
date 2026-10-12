@extends('layouts.app')

@section('content')
<h1>Új alkohol</h1>

  <form action="{{route('alcohols.store')}}" method="POST">
      @csrf

      <label for="name">Alkohol neve</label>
      <input type="text" name="name" id="name" value="{{old('name')}}" required>
      @error('name')
          <div class="error">{{$message}}</div>
      @enderror

      <br><br>

      <label for="category_id">Kategóriája</label>
      <input type="number" name="category_id" id="category_id" value="{{old('category_id')}}" required>
      @error('category_id')
          <div class="error">{{$message}}</div>
      @enderror
      
      <br><br>

      <button type="submit">Hozzáadás</button>
      <a href="{{route('alcohols.index')}}">Mégse</a>
      <br><br>
  </form>
@endsection
