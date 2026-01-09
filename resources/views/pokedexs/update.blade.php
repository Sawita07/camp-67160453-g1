@extends('template.default')

@section('content')
<h1>Pokedex Update</h1>

<form action="{{ url('/pokedexs/'.$pokedex_update->id) }}" method="post">
@csrf
@method('PUT')

<input class="form-control" name="name" value="{{ $pokedex_update->name }}">
<input class="form-control" name="type" value="{{ $pokedex_update->type }}">
<input class="form-control" name="species" value="{{ $pokedex_update->species }}">
<input class="form-control" name="height" value="{{ $pokedex_update->height }}">
<input class="form-control" name="weight" value="{{ $pokedex_update->weight }}">
<input class="form-control" name="hp" value="{{ $pokedex_update->hp }}">
<input class="form-control" name="attack" value="{{ $pokedex_update->attack }}">
<input class="form-control" name="defense" value="{{ $pokedex_update->defense }}">
<input class="form-control" name="image_url" value="{{ $pokedex_update->image_url }}">

<button class="btn btn-primary mt-2">บันทึก</button>
</form>

@include('pokedexs.table')
@endsection
