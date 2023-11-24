<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index()
    {
    	return view('admin.list.index',[
    		'pagetitle' => 'List of Students',
    		'title' => 'Cashiering | Admin'
    	]);
    }
    public function list()
    {
    	return view('admin.list.search',[
    		'pagetitle' => 'List of Students',
    		'title' => 'Search | Admin'
    	]);
    }
    public function create()
    {
        return view('admin.list.create',[
            'pagetitle' => 'List of Students',
            'title' => 'Create | Admin'
        ]);
    }
}
