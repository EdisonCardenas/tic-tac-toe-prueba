@extends('layouts.app')
@section('content')

    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">{{ __('Jugador') }}</th>
                <th scope="col">{{ __('Numero de juegos') }}</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($games as $game)
            <tr>
                <th scope="row">{{ $game->id }}</th>
                <td>{{ $game->first_player_name }} | {{ $game->second_player_name }}</td>
                <td>{{ $game->countGameRounds() }}</td>
            </tr>
            @endforeach

            </tbody>
        </table>
    </div>

    <hr>

    <div class="row">
        <div class="col text-center">

            {{ link_to_route('games.create', __('Nuevo juego'), [], ['class' => 'btn btn-success btn-block mb-3']) }}

        </div>
    </div>

@endsection
