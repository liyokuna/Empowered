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
use App\social_network;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class empowered_profileController extends Controller
{
	
	public function show($id){
		
		/*$data = applicant::select('id_post')
				->where('id_applicant',$id)
				->first();
		$post_info = post::select('id_creator')
					->where('id',$data['id_post'])
					->first();
		if($post_info["id_creator"] != Auth::user()->id)
		{
				return redirect("/profile/business/dashboard")
				->withSuccess("Something went wrong !");
		}
		else{*/
			
		$skills=skills::where('id_applicant',$id)->get();
		$backgrounds=background::where('id_applicant',$id)->orderBy('ending', 'desc')->get();
		$experiences=experience::where('id_applicant',$id)->orderBy('year_ending', 'desc')->get();
		$experiences_count=experience::where('id_applicant',$id)->count();
		$backgrounds_count=background::where('id_applicant',$id)->count();
		$skills_count=skills::where('id_applicant',$id)->count();
		$infos_count=extra_info::where('id_applicant',$id)->count();
		$infos=extra_info::where('id_applicant',$id)->first();
		$avatar=social_network::select('avatar')->where('id_applicant',$id)->first();
			
		$applicant=User::where('id',$id)
					->first();
				
		return view('profile.empowered.index',compact('applicant','skills','backgrounds','experiences','experiences_count','infos','avatar'));
		//}
	}
}