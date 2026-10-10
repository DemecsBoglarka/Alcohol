@extends('layouts.app')

@section('content')
<h1>'Új alkohol'</h1>

  <form action="{{route('alcohol.store')}}" method="POST">
      @csrf

      <label for="name">'Alkohol neve'</label>
      <input type="text" name="name" id="name" value="{{old('name')}}" required>
      @error('name')
          <div class="error">{{$message}}</div>
      @enderror

      <button type="submit">'Hozzáadás'</button>
      <a href="{{route('alcohol.index')}}">'Mégse'</a>
  </form>
@endsection
