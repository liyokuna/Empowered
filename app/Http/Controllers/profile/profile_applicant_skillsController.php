<?php
namespace App\Http\Controllers\profile;

use Auth;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\skills;
use App\Http\Requests\ProfileSkillsUpdateRequest;

class profile_applicant_skillsController extends Controller
{
	protected $infos = [
	'skill_name'=>'',
	'level'=>'',
	];
	public function index(){
		$id = Auth::user()->id;
		$skills=skills::where('id_applicant',$id)->get();
		return view('profile.applicant.profile.skills.index',compact('skills'));
	}
	
	public function edit($id)
	{
	$applicant= Auth::user()->id;
	$data=skills::select('id','id_applicant')->where('id',$id)->where('id_applicant',$applicant)->first();
	if($data["id_applicant"] != $applicant)
	{
	return redirect("/profile/applicant/profile/skills")
	->withSuccess("Something went wrong !");
	}
		
		$infos = skills::where('id',$id)->where('id_applicant',$applicant)->firstOrFail();
		$data = ['id' => $id];
		
	foreach (array_keys($this->infos) as $field) {
			$data[$field] = old($field, $infos->$field);
    }	

	return view('profile.applicant.profile.skills.edit', $data);
	}
	
	public function update(ProfileSkillsUpdateRequest $request,$id)
	{
		$data=skills::select('id_applicant')->where('id',$id)->first();
		if( $data["id_applicant"] !=Auth::user()->id)
		{
			return redirect("/profile/applicant/profile/skills")
			->withSuccess("Something went wrong !");
		}
		else{
			$infos = skills::where('id',$id)->firstOrFail();
			foreach (array_keys($this->infos) as $field) {
				$infos->$field= htmlentities($request->__get($field));
			}	
		$infos->save();
			
		return redirect("/profile/applicant/profile/skills")
        ->withSuccess("Changes saved !");
		}
	}
  
public function store(ProfileSkillsUpdateRequest $request)
  {
    $infos = new Skills();
	
    foreach (array_keys($this->infos) as $field) {
      $infos->$field = htmlentities($request->__get($field));
    }
	
	
	$infos->id_applicant=Auth::user()->id;
	
    $infos->save();
	
    return redirect('/profile/applicant/profile/skills')
        ->withSuccess("Changes was saved with success !");
  }
  
  public function create()
  {
    $infos = [];
    foreach ($this->infos as $field => $default) {
      $infos[$field] = old($field, $default);
    }
	
    return view('profile.applicant.profile.skills.create',$infos);
  }
  
   public function destroy($id)
  {
	 $data=skills::select('id_applicant')->where('id',$id)->first();
		if( $data["id_applicant"] !=Auth::user()->id)
		{
			return redirect("/profile/applicant/profile/skills")
			->withSuccess("Something went wrong !");
		}
		else{
			$infos = skills::where('id',$id)->firstOrFail();	
			$infos->delete();
		
		return redirect("/profile/applicant/profile/skills")
        ->withSuccess("The '$infos->skill_name' has been deleted.");
		}
  }
  
}