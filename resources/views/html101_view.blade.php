@extends('template.default')

@section('title','Workshop FORM Result')

@section('content')
<div class="container mt-5">
    <div class="card shadow p-4">
        <h3 class="mb-4">Result Workshop #HTML - FORM</h3>

        <p><strong>ชื่อ:</strong> {{ $fname }}</p>
        <p><strong>สกุล:</strong> {{ $lname }}</p>
        <p><strong>วันเกิด:</strong> {{ $dob }}</p>
        <p><strong>อายุ:</strong> {{ $age }}</p>
        <p><strong>เพศ:</strong> {{ $gender }}</p>
        <p><strong>ที่อยู่:</strong> {{ $address }}</p>
        <p><strong>สีที่ชอบ:</strong> {{ $color }}</p>
        <p><strong>แนวเพลง:</strong> {{ $music }}</p>

        
    </div>
</div>
@endsection
