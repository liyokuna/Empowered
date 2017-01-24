<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class businessController extends Controller
{
	public function index()
	{		
		return view('business.content.index');
	}

}