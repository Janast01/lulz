<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcademicyearController extends Controller
{
    public function acadyear()
    {
    	return view('admin.payment.acadyear',[
    		'title' => 'School Year | Admin'
    	]);
    }
}