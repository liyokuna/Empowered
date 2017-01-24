<?php

namespace App\Http\Controllers\profile;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\post;
use App\tag_background;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\tag_backgroundRequest;

class tag_backgroundsController extends Controller
{
	protected $infos = [
		'background'=>'',
		'status'=>'',
		'id_post'=>'',
	];
	
	public function index(){
		$id = Auth::user()->id;
		$backgrounds=post::where('id_creator',$id)
					->join('tag_backgrounds','posts.id','=','tag_backgrounds.id_post')
					->select('posts.title','posts.beginning','posts.ending','tag_backgrounds.background','tag_backgrounds.status','tag_backgrounds.id')
					->orderBy('tag_backgrounds.created_at','desc')
					->get();
		
		return view('profile.business.backgrounds.index', compact('backgrounds'));
	}
	
	public function edit($id)
	{
	
	$id_of_post=tag_background::select('id_post')->where('id',$id)->first();
	$id_post=$id_of_post["id_post"];
	$id_user=post::select('id_creator')->where('id',$id_post)->first();
	
	$data = tag_background::where('id',$id)->first();
	
	if( $id_user["id_creator"] !=Auth::user()->id )
	{
	return redirect("/profile/business/backgrounds")
	->withSuccess("Something went wrong !");
	}
	else{
		$infos = tag_background::where('id',$id)->firstOrFail();
		$data = ['id' => $id];
		
	foreach (array_keys($this->infos) as $field) {
			$data[$field] = old($field, $infos->$field);
    }	

	return view('profile.business.backgrounds.edit', $data);
	}
	}
	
	public function update(tag_backgroundRequest $request,$id)
	{		
		$id_of_post=tag_background::select('id_post')->where('id',$id)->first();
		$id_user=post::select('id_creator')->where('id',$id_of_post["id_post"])->first();
		
		if( $id_user["id_creator"] != Auth::user()->id )
		{
			return redirect("/profile/business/backgrounds")
			->withSuccess("Something went wrong !");
		}
		else{
			$infos = tag_background::where('id',$id)->firstOrFail();
			foreach (array_keys($this->infos) as $field) {
				$infos->$field= htmlentities($request->__get($field));
			}	
		$infos->id_post = $id_of_post["id_post"];
		$infos->save();
			
		return redirect("/profile/business/backgrounds")
        ->withSuccess("Changes saved !");
		}
	}
	
	public function create()
  {
    $infos = [];
    foreach ($this->infos as $field => $default) {
      $infos[$field] = old($field, $default);
    }
	
	$id = Auth::user()->id;
	$infos_post=post::select('id','title')->where('id_creator',$id)->get();
	
	
    return view('profile.business.backgrounds.create',compact('infos','infos_post'));
  }
  
  public function store(tag_backgroundRequest $request)
  {
    $infos = new tag_background();
	
    foreach (array_keys($this->infos) as $field) {
      $infos->$field = htmlentities($request->__get($field));
    }
	
    $infos->save();
	
    return redirect('/profile/business/backgrounds')
        ->withSuccess("A new background was added with success !");
  }
  
      public function destroy($id)
  {
		$id_of_post=tag_background::select('id_post')->where('id',$id)->first();
		$id_user=post::select('id_creator')->where('id',$id_of_post["id_post"])->first();
		
		$data=tag_background::where('id',$id)->firstOrFail();
		if( $id_user["id_creator"] !=Auth::user()->id )
		{
			return redirect("/profile/business/backgrounds")
			->withSuccess("Something went wrong !");
		}
		else{
			$infos = tag_background::where('id',$id)->firstOrFail();	
			$infos->delete();
		
		return redirect("/profile/business/backgrounds")
        ->withSuccess("The '$infos->background' has been deleted.");
		}
  }
  
}
