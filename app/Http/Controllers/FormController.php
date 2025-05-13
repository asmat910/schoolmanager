<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class FormController extends Controller
{
    function store_data(Request $request) {
        $data = new Teacher;
        $data->name = $request->input('name');
        $data->department = $request->input('department');
        $data->dob = $request->input('dob');
        $data->doj = $request->input('doj');
        $data->save();
        return back();
    }
}
