<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkshopFormController extends Controller
{

    public function index()
    {
        return view('html101');
    }


    public function store(Request $request)
    {
        return view('html101_view', [
            'fname' => $request->fname,
            'lname' => $request->lname,
            'dob' => $request->dob,
            'age' => $request->age,
            'gender' => $request->gender,
            'address' => $request->address,
            'color' => $request->color,
            'music' => $request->music,
        ]);
    }
}
