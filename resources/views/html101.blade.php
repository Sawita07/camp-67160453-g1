<!-- file: resources/views/html101.blade.php -->
<!Doctype html>

<html>
    <head>
        <title>ส่วนหัวของ HTML</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: "Sarabun", sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="container mt-4">
            <h1>Workshop #HTML - FORM</h1>
            <form>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="fname">ชื่อ</label>
                    </div>
                    <div class="col">
                        <input id="fname" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="lname">สกุล</label>
                    </div>
                    <div class="col">
                        <input id="lname" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="hbd">วัน/เดือน/ปีเกิด</label>
                    </div>
                    <div class="col">
                        <input id="hbd" class="form-control" placeholder="dd/mm/yyyy">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="lname">อายุ</label>
                    </div>
                    <div class="col">
                        <input id="lname" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="lname">เพศ</label>
                    </div>
                    <div class="col">
                    <input type="radio" name="gender" value="male"> ชาย
                    <input type="radio" name="gender" value="female"> หญิง
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="lname">รูป</label>
                    </div>
                    <div class="col">
                    <input type="file" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="lname">ที่อยู่</label>
                    </div>
                    <div class="col">
                        <input id="lname" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="lname">สีที่ชอบ</label>
                    </div>
                     <div class="col">
                    <select class="form-control">
                    <option>สีแดง</option>
                    <option>สีม่วงพลาสเทล</option>
                    <option>สีชมพูวิ้งๆ</option>
                    <option>สีส้มส้ม</option>
                    </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                     <label for="lname">แนวเพลงที่ชอบ</label>
                    </div>
                    <div class="col">
                    <input type="radio" name="music type" value="survival"> เพื่อชีวิต
                    <input type="radio" name="music type" value="thai traditional"> ลูกทุ่ง
                    <input type="radio" name="music type" value="Another"> อื่นๆ
                    </div>
                    </div>
                    <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <input type="checkbox"> ยินยอมให้เก็บข้อมูล
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-12 col-md-4"></div>
                    <div class="col">
                    <button type="button" class="btn btn-light me-4">Reset</button>
                    <button type="button" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>