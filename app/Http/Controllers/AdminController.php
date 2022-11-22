<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use File;




class AdminController extends Controller
{
    public function admin()
	{


		return view('admin.index');
	}


	
}
