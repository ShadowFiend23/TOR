<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RubricsController extends Controller
{
    //

    public function rubrics(){
        return view('admin/rubrics/index');
    }

    public function editRubrics(){
        return view('admin/rubrics/edit');
    }
}
