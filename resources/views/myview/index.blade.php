@extends('template.default')

@section('title','my view')
@section('content')
<h1>My view</h1>

<?php
echo "My view Content";
echo "<br>";
echo "Line 2";
?>
<br>

<?php
$myval ="Hello PHP";
?>
<br>

<?php
$myval = 1;
echo $myval;

// การสร้าง Array ใน php
$myarry  = array(1,2,3,4);
$myarry2 = [1,2,3,40];
$myarry3 = [];
$myarry3[] = 1;
$myarry3[] = 2;
$myarry3[] = 3;
$myarry3[] = 4;

echo $myarry[0];
echo "<br>";
print_r($myarry2);
echo "<br>";
var_dump($myarry3);
?>

<?php
$myarry4 = [
    "name" => "john",
    "age"  => 30,
    "city" => "New York",
    0,
    1
];

print_r($myarry4);

foreach ($myarry4 as $key => $value) {
    echo "<br>key: " . $key . " Value: " . $value;
}

foreach ($myarry4 as $value) {
    echo "<br>Value: " . $value;
}

$myval ="A";
for($i = 0; $i < 10; $i++){
    echo $myval++;
    echo "<br>";
}
?>

<?php
function myFunction() {
    return "My Function Called";
}

echo myFunction();

$a = 10;
if ($a < 10) {
    echo "a < 10";
} elseif ($a == 10) {
    echo "a == 10";
} else {
    echo "a > 10";
}
?>
@endsection
