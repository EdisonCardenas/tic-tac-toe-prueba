@extends('layouts.app')
@section('content')

    <div class="text-center">

        {{ link_to_route('games.create', __('Iniciar juego'), [], ['class' => 'btn btn-primary btn-lg']) }}

    </div>

@endsection
