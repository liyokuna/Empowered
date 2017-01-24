<?php

namespace App\Http\Controllers\profile;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\post;
use App\authorization;
use App\about_companies;
use App\social_links;
use App\applicant;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class business_profileAdminController extends Controller
{
	
	public function show($id){
		
		$mail=authorization::select('email')->where('id',$id)->first();
		$identification = user::select('id')->where('email',$mail["email"])->first();

		$business_infos=about_companies::where('id_company', $identification["id"] )->first();
		$business_links=social_links::where('id_company',$identification["id"])->first();
		$exist_infos=about_companies::where('id_company',$identification["id"])->count();
		$exist_links=social_links::where('id_company',$identification["id"])->count();
				
		return view('profile.empoweredAdmin.business.index',compact('business_infos','business_links','exist_infos','exist_links'));
		}
}