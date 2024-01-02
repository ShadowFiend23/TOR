<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolYearController extends Controller
{
    //

    public function schoolYear(){
        return view('admin/school_year/index');
    }
}
