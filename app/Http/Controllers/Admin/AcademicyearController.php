<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcademicYearController extends Controller
{
	public function index()
    {
        return view('admin.acadyear.index',[
			'pagetitle' => 'Academic Year',
			'title' => 'Admin Dashboard'
		]);
    }
    
}
