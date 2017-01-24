<?php

namespace App\Http\Controllers\profile;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\post;
use App\applicant;
use App\skills;
use App\background;
use App\experience;
use App\extra_info;
use App\authorization;
use App\social_network;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class empowered_profileAdminController extends Controller
{
	
	public function show($id){
			
		$mail=authorization::select('email')->where('id',$id)->first();
		$identification = user::select('id')->where('email',$mail["email"])->first();
		
		$skills=skills::where('id_applicant',$identification["id"])->get();
		$backgrounds=background::where('id_applicant',$identification["id"])->orderBy('ending', 'desc')->get();
		$experiences=experience::where('id_applicant',$identification["id"])->orderBy('year_ending', 'desc')->get();
		$experiences_count=experience::where('id_applicant',$identification["id"])->count();
		$backgrounds_count=background::where('id_applicant',$identification["id"])->count();
		$skills_count=skills::where('id_applicant',$identification["id"])->count();
		$infos_count=extra_info::where('id_applicant',$identification["id"])->count();
		$infos=extra_info::where('id_applicant',$identification["id"])->first();
		$avatar=social_network::select('avatar')->where('id_applicant',$identification["id"])->first();
			
		$applicant=User::where('id',$identification["id"])
					->first();
				
		return view('profile.empoweredAdmin.index',compact('applicant','skills','backgrounds','experiences','experiences_count','infos','avatar'));
	}
}