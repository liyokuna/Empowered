<?php

namespace App\Http\Controllers\profile;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\post;
use App\about_companies;
use App\social_links;
use App\applicant;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class business_profileController extends Controller
{
	
	public function show($id){

		$business_infos=about_companies::where('id_company', $id )->first();
		$business_links=social_links::where('id_company',$id)->first();
		$exist_infos=about_companies::where('id_company',$id)->count();
		$exist_links=social_links::where('id_company',$id)->count();
				
		return view('profile.empowered.business.index',compact('business_infos','business_links','exist_infos','exist_links'));
		}
}