@extends('template.default')
@section ('header' , 'ตารางแม่สูตรคูณ')
@section('content')
    <from action= "/calculate" method="post">
        @csrf 
        <?php //echo isset ($_GET['mynumber']) ? $_GET['mynumber'] : ""; ?>
        <input class = "from-control" name ="mynumber" type="number">
        <br>
        <button class ="btn btn-success">บันทึก</button>
    </from>

@endsection

