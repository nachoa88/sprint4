@extends('layouts.app')

@section('content')

<h1 class="mt-16 mb-16 text-2xl font-bold text-blue-600">Games Page</h1>
<p class="mt-16 mb-16">Bla bla bla of content of the page that will be one day complete.</p>

<ul class="list-unstyled mb-16">
    @foreach($games as $game) 
        <li><a href="#!">{{ $game }}</a></li>
    @endforeach
</ul>

@endsection