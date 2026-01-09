@extends('template.default')

@section('content')
<h1>Pokedex Create</h1>

<form action="{{ url('/pokedexs') }}" method="post">
@csrf
<input class="form-control" name="name" placeholder="Name">
<input class="form-control" name="type" placeholder="Type">
<input class="form-control" name="species" placeholder="Species">
<input class="form-control" name="height" type="number" placeholder="Height">
<input class="form-control" name="weight" type="number" placeholder="Weight">
<input class="form-control" name="hp" type="number" placeholder="HP">
<input class="form-control" name="attack" type="number" placeholder="Attack">
<input class="form-control" name="defense" type="number" placeholder="Defense">
<input class="form-control" name="image_url" placeholder="Image URL">
<button class="btn btn-primary mt-2">บันทึก</button>
</form>

@include('pokedexs.table')
@endsection
