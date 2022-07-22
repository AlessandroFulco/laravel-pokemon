@extends('layouts.app')

@section('content')

    <table class="table table-bordered">
        <thead>
            <th>Id</th>
            <th>Species</th>
            <th>Gender</th>
            <th>type</th>
            <th>altezza</th>
            <th>peso</th>
            <th>livello</th>
            {{-- <th colspan="3">action</th> --}}
        </thead>
        <tbody>
            @foreach ($pokemons as $pokemon)

                <tr data-id={{ $pokemon->id }}>

                    <td>{{$pokemon->id}}</td>
                    <td>{{$pokemon->species}}</td>
                    <td>{{$pokemon->gender}}</td>
                    <td>{{$pokemon->type}}</td>
                    <td>{{$pokemon->altezza}}</td>
                    <td>{{$pokemon->peso}}</td>
                    <td>{{$pokemon->livello}}</td>
                    <td>
                        <a href="{{ route('pokemons.show', ['pokemon' => $pokemon]) }}" class="btn btn-primary">View</a>
                    </td>
                    <td>
                        <a href="{{ route('pokemons.edit', ['pokemon' => $pokemon]) }}" class="btn btn-warning">edit</a>
                    </td>

                    <td>
                        <button class="btn btn-danger js-delete" >Delete</button>
                        {{-- <form action="{{route('pokemons.destroy', ['pokemon' => $pokemon]) }}" method="post">
                            @csrf
                            @method('DELETE')
                        </form> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$pokemons->links()}}

    <section class="overlay d-none">
        <form class="popup"  data-action="{{route('pokemons.destroy', ['pokemon' => '*****' ])}}" method="post">
            @csrf
            @method('DELETE')
            <h1>
                Sei sicuro?
            </h1>
            <button type="submit" class="btn btn-warning js-yes">Yes</button>
            <button type="button" class="btn btn-danger js-no">No</button>
        </form>
    </section>

@endsection
