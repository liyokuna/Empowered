<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class startController extends Controller
{
	public function index()
	{		
		return view('start.content.index');
	}

}