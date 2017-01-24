<?php

namespace App\Http\Controllers\profile;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\post;
use App\authorization;
use App\tag_skill;
use App\tag_background;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;;

class postController extends Controller
{
	protected $infos = [
		'title'=>'',
		'description'=>'',
		'beginning'=>'',
		'ending'=>'',
		'status'=>'',
	];
	
	public function index(){
		$id = Auth::user()->id;
		$posts=post::where('id_creator',$id)->get();
		$authorization = authorization::select('status')->where('email',Auth::user()->email)->first();
		return view('profile.business.post.index', compact('posts','authorization'));
	}
	
	public function edit($id)
	{
	
	$data=post::where('id',$id)->first();
	if( $data["id_creator"] !=Auth::user()->id )
	{
	return redirect("/profile/business/post")
	->withSuccess("Something went wrong !");
	}
	else{
		$infos = post::where('id',$id)->firstOrFail();
		$data = ['id' => $id];
		
	foreach (array_keys($this->infos) as $field) {
			$data[$field] = old($field, $infos->$field);
    }	
	return view('profile.business.post.edit', $data);
	}
	}
	
	
	public function update(PostRequest $request,$id)
	{		
		$data=post::where('id',$id)->first();
		if( $data["id_creator"] !=Auth::user()->id)
		{
			return redirect("/profile/business/post")
			->withSuccess("Something went wrong !");
		}
		else{
			$infos = post::where('id',$id)->firstOrFail();
			foreach (array_keys($this->infos) as $field) {
				$infos->$field= htmlentities($request->__get($field));
			}	
		$infos->save();
			
		return redirect("/profile/business/post")
        ->withSuccess("Changes saved !");
		}
	}
	
	  public function create()
  {
    $infos = [];
    foreach ($this->infos as $field => $default) {
      $infos[$field] = old($field, $default);
    }
	
    return view('profile.business.post.create',$infos);
  }
  
  public function store(PostRequest $request)
  {
    $infos = new post();
	
    foreach (array_keys($this->infos) as $field) {
      $infos->$field = htmlentities($request->__get($field));
    }
	
	
	$infos->id_creator=Auth::user()->id;
	
    $infos->save();
	
    return redirect('/profile/business/post')
        ->withSuccess("A new post was saved with success !");
  }
  
      public function destroy($id)
  {
	 $data=post::select('id_creator')->where('id',$id)->first();
		if( $data["id_creator"] !=Auth::user()->id)
		{
			return redirect("/profile/business/post")
			->withSuccess("Something went wrong !");
		}
		else{
			$infos = post::where('id',$id)->firstOrFail();	
			$infos->delete();
		
		return redirect("/profile/business/post")
        ->withSuccess("The '$infos->title' has been deleted.");
		}
  }
  
}
