<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class individualController extends Controller
{
	public function index()
	{		
		return view('individual.content.index');
	}

}