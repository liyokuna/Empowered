<?php
namespace App\Http\Controllers\profile;

use Auth;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\skills;
use App\background;
use App\experience;
use App\extra_info;
use App\social_network;
use App\Http\Requests\InfosUpdateRequest;

class profile_applicantController extends Controller
{

	public function index()
	{		
		$id = Auth::user()->id;
		$skills=skills::where('id_applicant',$id)->get();
		$backgrounds=background::where('id_applicant',$id)->orderBy('ending', 'desc')->get();
		$experiences=experience::where('id_applicant',$id)->orderBy('year_ending', 'desc')->get();
		$experiences_count=experience::where('id_applicant',$id)->count();
		$backgrounds_count=background::where('id_applicant',$id)->count();
		$skills_count=skills::where('id_applicant',$id)->count();
		$infos_count=extra_info::where('id_applicant',$id)->count();
		$infos=extra_info::where('id_applicant',$id)->first();
		$avatar=social_network::select('avatar')->where('id_applicant',$id)->first();
		return view('profile.applicant.profile.index', compact('skills','backgrounds','experiences','experiences_count','backgrounds_count','skills_count','infos','infos_count','avatar'));
	}
	
}