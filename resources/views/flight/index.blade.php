@extends('template.default')

@section('content')
<h1>Flight Creat</h1>
<from action="{{url('/flights')}}" method="post">
    @csrf
    <label for="name">Name</label>
    <input class="from-control" type="text" name="name" id="name">
    <label for="airline">Airline</lable>

<h1>Flight Lists</h1>
<table class="table">
    <thead>
    <tr>
        <td>id</td>
        <td>name</td>
        <td>airline</td>
        <td>number_of_seats</td>
        <td>price</td>
        <td></td>
    </tr>
    </thead>
    <?php foreach ($flight as $item ) {?>
        # code...
    
</table>
