<?php
namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class connectController extends Controller
{
	
	public function index()
	{		
		return view('profile.applicant.profile.connect.index');
	}

}