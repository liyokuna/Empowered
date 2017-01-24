<?php

namespace App\Http\Controllers\profile;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\post;
use App\tag_skill;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\tag_skillsRequest;

class tag_skillsController extends Controller
{
	protected $infos = [
		'skill'=>'',
		'level'=>'',
		'id_post'=>'',
	];
	
	public function index(){
		$id = Auth::user()->id;
		$skills=post::where('id_creator',$id)
					->join('tag_skills','posts.id','=','tag_skills.id_post')
					->select('posts.title','posts.beginning','posts.ending','tag_skills.skill','tag_skills.level','tag_skills.id')
					->orderBy('tag_skills.created_at','desc')
					->get();
		
		return view('profile.business.skills.index', compact('skills'));
	}
	
	public function edit($id)
	{
	
	$id_of_post=tag_skill::select('id_post')->where('id',$id)->first();
	$id_post=$id_of_post["id_post"];
	$id_user=post::select('id_creator')->where('id',$id_post)->first();
	
	$data = tag_skill::where('id',$id)->first();
	
	if( $id_user["id_creator"] !=Auth::user()->id )
	{
	return redirect("/profile/business/skills")
	->withSuccess("Something went wrong !");
	}
	else{
		$infos = tag_skill::where('id',$id)->first();
		$data = ['id' => $id];
		
	foreach (array_keys($this->infos) as $field) {
			$data[$field] = old($field, $infos->$field);
    }	

	return view('profile.business.skills.edit', $data);
	}
	}
	
	public function update(tag_skillsRequest $request,$id)
	{		
	
		$id_of_post=tag_skill::select('id_post')->where('id',$id)->first();
		$id_user=post::select('id_creator')->where('id',$id_of_post["id_post"])->first();
		
		$data=tag_skill::where('id',$id)->firstOrFail();
		if( $id_user["id_creator"] !=Auth::user()->id )
		{
			return redirect("/profile/business/skills")
			->withSuccess("Something went wrong !");
		}
		else{
			$infos = tag_skill::where('id',$id)->firstOrFail();
			foreach (array_keys($this->infos) as $field) {
				$infos->$field= htmlentities($request->__get($field));
			}	
		$infos->id_post = $id_of_post["id_post"];
		$infos->save();
			
		return redirect("/profile/business/skills")
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
	
	
    return view('profile.business.skills.create',compact('infos','infos_post'));
  }
  
  public function store(tag_skillsRequest $request)
  {
    $infos = new tag_skill();
	
    foreach (array_keys($this->infos) as $field) {
      $infos->$field = htmlentities($request->__get($field));
    }
	
    $infos->save();
	
    return redirect('/profile/business/skills')
        ->withSuccess("A new skill was added with success !");
  }
  
      public function destroy($id)
  {
		$id_of_post=tag_skill::select('id_post')->where('id',$id)->first();
		$id_user=post::select('id_creator')->where('id',$id_of_post["id_post"])->first();
		
		$data=tag_skill::where('id',$id)->firstOrFail();
		if( $id_user["id_creator"] !=Auth::user()->id )
		{
			return redirect("/profile/business/skills")
			->withSuccess("Something went wrong !");
		}
		else{
			$infos = tag_skill::where('id',$id)->firstOrFail();	
			$infos->delete();
		
		return redirect("/profile/business/skills")
        ->withSuccess("The '$infos->skill' has been deleted.");
		}
  }
  
}
