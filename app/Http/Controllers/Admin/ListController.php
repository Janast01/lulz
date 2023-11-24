<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index()
    {
    	return view('admin.payment.index',[
    		'pagetitle' => 'List of Students',
    		'title' => 'Cashiering | Admin'
    	]);
    }
    public function search()
    {
    	return view('admin.payment.search',[
    		'pagetitle' => 'Search',
    		'title' => 'Search | Admin'
    	]);
    }
}
