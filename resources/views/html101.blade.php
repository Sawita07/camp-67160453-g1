@extends('template.default')

@section('title','Workshop FORM')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow p-4 w-100" style="max-width: 750px;">
        <h2 class="text-center mb-4">Workshop #HTML - FORM</h2>

        <form method="POST" action="{{ route('workshop.store') }}" onsubmit="return validateForm()">
            @csrf

            <div class="row mb-3 align-items-center">
                <label for="fname" class="col-md-3 col-form-label">ชื่อ</label>
                <div class="col-md-9">
                    <input id="fname" name="fname" class="form-control">
                    <div class="invalid-feedback">โปรดระบุชื่อ</div>
                </div>
            </div>

            <div class="row mb-3 align-items-center">
                <label for="lname" class="col-md-3 col-form-label">สกุล</label>
                <div class="col-md-9">
                    <input id="lname" name="lname" class="form-control">
                    <div class="invalid-feedback">โปรดระบุนามสกุล</div>
                </div>
            </div>

            <div class="row mb-3 align-items-center">
                <label for="dob" class="col-md-3 col-form-label">วันเกิด</label>
                <div class="col-md-9">
                    <input type="date" id="dob" name="dob" class="form-control">
                </div>
            </div>

            <div class="row mb-3 align-items-center">
                <label for="age" class="col-md-3 col-form-label">อายุ</label>
                <div class="col-md-9">
                    <input type="number" id="age" name="age" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-md-3 col-form-label">เพศ</label>
                <div class="col-md-9">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" value="ชาย">
                        <label class="form-check-label">ชาย</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" value="หญิง">
                        <label class="form-check-label">หญิง</label>
                    </div>
                </div>
            </div>

            <div class="row mb-3 align-items-center">
                <label class="col-md-3 col-form-label">รูป</label>
                <div class="col-md-9">
                    <input type="file" name="photo" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <label for="address" class="col-md-3 col-form-label">ที่อยู่</label>
                <div class="col-md-9">
                    <textarea id="address" name="address" class="form-control" rows="3"></textarea>
                </div>
            </div>

            <div class="row mb-3 align-items-center">
                <label for="color" class="col-md-3 col-form-label">สีที่ชอบ</label>
                <div class="col-md-9">
                    <select id="color" name="color" class="form-control">
                        <option value="">-- เลือกสี --</option>
                        <option>สีม่วงพลาสเทล</option>
                        <option>สีชมพูวิ้้งๆ</option>
                        <option>สีแดงงง</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-md-3 col-form-label">แนวเพลง</label>
                <div class="col-md-9">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="music" value="เพื่อชีวิต">
                        <label class="form-check-label">เพื่อชีวิต</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="music" value="ลูกทุ่ง">
                        <label class="form-check-label">ลูกทุ่ง</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="music" value="อื่นๆ">
                        <label class="form-check-label">อื่นๆ</label>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-9 offset-md-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="agree" name="agree">
                        <label class="form-check-label">ยินยอมให้เก็บข้อมูล</label>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <button type="reset" class="btn btn-light me-3">Reset</button>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>

        </form>
    </div>
</div>
@endsection
