@extends('layouts.app')

@section('content')
    <a href="{{route('pokedex.index')}}">pokdex</a>
@endsection

@section('scripts')
    @vite('resources/js/index.js')
@endsection
