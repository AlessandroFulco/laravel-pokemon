@extends('layouts.app')
@section('content')
<h1>Insert new Pokemon</h1>

<form action="{{ route('pokemons.store')}}" method="post">
    @csrf

    <div class="mb-3">
        <label for="species" class="form-label">Species</label>
        <input type="text" class="form-control" id="gender" name="species" value="{{ old('species')}}">
            {{-- validation --}}
            @error('species')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
    </div>
    <div class="mb-3">
        <label for="gender" class="form-label">Gender</label>
        <input type="text" class="form-control" id="gender" name="gender" value="{{ old('gender')}}">
        {{-- validation --}}
        @error('gender')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">type</label>
        <input type="text" class="form-control" id="type" name="type" value="{{ old('type')}}">
        {{-- validation --}}
        @error('type')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="altezza" class="form-label">altezza</label>
        <input type="text" class="form-control" id="altezza" name="altezza" value="{{ old('altezza')}}">
        {{-- validation --}}
        @error('altezza')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="peso" class="form-label">peso</label>
        <input type="text" class="form-control" id="peso" name="peso" value="{{ old('peso')}}">
        {{-- validation --}}
        @error('peso')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="livello" class="form-label">livello</label>
        <input type="text" class="form-control" id="livello" name="livello" value="{{ old('livello')}}">
        {{-- validation --}}
        @error('livello')
                <div class="alert alert-danger mt-2" role="alert">
                    {{ $message }}
                </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Salva</button>
</form>

@endsection
