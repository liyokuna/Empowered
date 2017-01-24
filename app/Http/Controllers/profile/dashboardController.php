<?php

namespace App\Http\Controllers\profile;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;
use App\authorization;
use App\post;
use App\applicant;
use App\about_companies;
use App\social_links;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class dashboardController extends Controller
{

	public function index(){
		$id = Auth::user()->id;
		
		$posts=DB::table('posts')
					->where('id_creator',$id)->where('status','like','pending')
					->select('id','title', 'description', 'beginning', 'ending' )
					->orderBy('created_at','desc')
					->get();
					
		$authorization = authorization::select('status')->where('email',Auth::user()->email)->first();

		$exist_infos=about_companies::where('id_company',$id)->count();
		$exist_links=social_links::where('id_company',$id)->count();
		
		return view('profile.business.dashboard.index', compact('posts','authorization','exist_infos','exist_links'));
	}
	
	public function show($id){
		
		$data = post::select('id_creator')
				->where('id',$id)
				->first();
		
		if($data["id_creator"] != Auth::user()->id)
		{
				return redirect("/profile/business/dashboard")
				->withSuccess("Something went wrong !");
		}
		else{
		$applicants=applicant::where('id_post',$id)
				->orderBy('created_at','desc')
				->get();
				
		$post_title =post::select('title')
				->where('id',$id)
				->first();
				
		$count_applicants = applicant::where('id_post',$id)
				->count();
		
		return view('profile.business.dashboard.list',compact('applicants','post_title','count_applicants'));
		}
	}
}