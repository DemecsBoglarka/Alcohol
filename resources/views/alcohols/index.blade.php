@extends('layouts.app')

@section('content')

<?php
    use App\Models\Category;
?>

    <h1>Alkoholok</h1>
    <select name="categories" id="categories" onchange="window.location.href=this.value">
        <option value="{{route('alcohols.index', ['selCategoryId' => null])}}">Összes</option>
        @foreach($categories as $category)
            @if ($category->id == $selCategoryId)
              <option selected="selected" value="{{route('alcohols.index', ['selCategoryId' => $category->id])}}">{{$category->name}}</option>
            @else
              <option value="{{route('alcohols.index', ['selCategoryId' => $category->id])}}">{{$category->name}}</option>
            @endif
        @endforeach
    </select>
    <a href="{{route('alcohols.create')}}">Új alkohol</a>

    @foreach($alcohols as $alcohol)
        <hr>
        <span>Név: {{$alcohol->name}}</span>
        <br>
        <span>Kategória: {{Category::find($alcohol->category_id)->name}}</span>
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
