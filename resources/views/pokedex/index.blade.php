@extends('layouts.app')

@section('content')
    @extends('animations.pokedex-open')
    <div class="test">

    </div>
@endsection

@section('scripts')
    @vite('resources/js/pokedex/index.js')
    @vite('resources/js/pokedex/main.js')
    @vite('resources/js/animations/pokedex-open.js')
@endsection
