<?php
namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class infosController extends Controller
{
	
	public function index()
	{		
		return view('profile.welcome.index');
	}

}