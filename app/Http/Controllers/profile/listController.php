<?php

namespace App\Http\Controllers\profile;

use Illuminate\Http\Request;
use Auth;
use App\post;
use App\applicant;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class listController extends Controller
{
	
	public function index(){
	
		$applications= applicant::where('applicants.id_applicant', Auth::user()->id)
						->join('posts','posts.id','=','applicants.id_post')
						->select( 'posts.title as title', 'posts.status as status', 'applicants.created_at as due_date','posts.id as id')
						->orderBy('applicants.created_at','desc')
						->get();
				
		return view('profile.applicant.profile.list.index',compact('applications'));
		}
}