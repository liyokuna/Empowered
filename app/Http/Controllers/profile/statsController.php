<?php
namespace App\Http\Controllers\profile;

use App\User;
use App\Post;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class statsController extends Controller
{
	
	public function index()
	{		
	
		$applicants_count = User::where('status','AP')->count();
		$business_count = User::where('status','BU')->count();
		$admin_count = User::where('status','AD')->count();
		$users = User::orderBy('created_at','desc')->paginate(5);
		$posts = Post::orderBy('created_at','desc')->paginate(5);
		$open_position = Post::where('status','pending')->count();
		$close_position = Post::where('status','taken')->count();
		return view('profile.admin.stats.index', compact('applicants_count','business_count','admin_count','users','posts','open_position','close_position'));
	}

}