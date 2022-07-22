@extends('layouts.app')
@section('content')
<h1>Edit {{$pokemon->title}}</h1>

<form action="{{ route('pokemons.update', ['pokemon' => $pokemon])}}" method="post">
    @method('PUT')
    @csrf

    @if($errors->any())
        <div class="alert alert-danger mt-2">
            @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
            @endforeach
        </div>
    @endif

    <div class="mb-3">
        <label for="species" class="form-label">species</label>
        <input type="text" class="form-control" id="species" name="species" value="{{ old('species', $pokemon->species)}}">
    </div>
    <div class="mb-3">
        <label for="gender" class="form-label">gender</label>
        <input type="text" class="form-control" id="gender" name="gender" value="{{old('gender', $pokemon->gender)}}">
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">type</label>
        <input type="text" class="form-control" id="type" name="type" value="{{old('type', $pokemon->type)}}">
    </div>
    <div class="mb-3">
        <label for="altezza" class="form-label">altezza</label>
        <input type="text" class="form-control" id="altezza" name="altezza" value="{{old('altezza', $pokemon->altezza)}}">
    </div>
    <div class="mb-3">
        <label for="peso" class="form-label">peso</label>
        <input type="text" class="form-control" id="peso" name="peso" value="{{old('peso', $pokemon->peso)}}">
    </div>
    <div class="mb-3">
        <label for="livello" class="form-label">livello</label>
        <input type="text" class="form-control" id="livello" name="livello" value="{{old('livello', $pokemon->livello)}}">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>


@endsection
