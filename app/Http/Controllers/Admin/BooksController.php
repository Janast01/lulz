<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
    	return view('admin.books.index',[
    		'pagetitle' => 'Books',
    		'title' => 'Books | Admin'
    	]);
    }
    public function create()
    {
    	return view('admin.books.create',[
    		'pagetitle' => 'Books',
    		'title' => 'Books | Admin'
    	]);
    }
}
