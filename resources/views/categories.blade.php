@extends('layouts.app')
@section('content')
    <h1>Categories</h1>

    @foreach($categories as $category)
    <li>{{ $category->name }}</li>
    @endforeach

@endsection
