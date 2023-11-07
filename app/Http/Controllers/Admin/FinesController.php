<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FinesController extends Controller
{
    public function fines()
    {
    return view('admin.fines.total',[
            'title' => 'Total'
        ]);
    }
}
