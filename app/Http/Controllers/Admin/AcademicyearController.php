<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcademicyearController extends Controller
{
    public function index()
    {
    	return view('admin.academicyear.acadyear',[
    		'title' => 'School Year | Admin'
    	]);
    }
}