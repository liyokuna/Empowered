<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class abroadController extends Controller
{
	public function index()
	{		
		return view('abroad.content.index');
	}

}