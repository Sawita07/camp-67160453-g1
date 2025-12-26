<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //สร้าง ตัวแปล
    public $myval ="";
    private $myvalue2;

    // Construction
    //MyController()
    function __construct(){

    }

    //สร้าง function
    function index(){
        return view('myview.index');
    }


  function info(){
        return view("myview.info");
    }

    function calculate(Request $req){
        //echo $req->input ('mynumber');
        return view('myview.calculate');
    }

}
