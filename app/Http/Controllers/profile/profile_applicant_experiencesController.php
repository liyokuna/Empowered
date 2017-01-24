<?php
namespace App\Http\Controllers\profile;

use Auth;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\experience;
use App\Http\Requests\ProfileExperiencesUpdateRequest;

class profile_applicant_experiencesController extends Controller
{
	protected $infos = [
	'business_name'=>'',
	'mission_name'=>'',
	'field'=>'',
	'month_beginning'=>'',
	'year_beginning'=>'',
	'month_ending'=>'',
	'year_ending'=>'',
	'description'=>'',
	'additionnal'=>'',
	'city'=>'',
	'country'=>'',
	];
	public function index(){
		$id = Auth::user()->id;
		$experiences=experience::where('id_applicant',$id)->get();
		$experiences_count=experience::where('id_applicant',$id)->count();
		return view('profile.applicant.profile.experiences.index',compact('experiences','experiences_count'));
	}
	
	public function edit($id)
	{
		
	$applicant= Auth::user()->id;
	$data=experience::select('id','id_applicant')->where('id',$id)->where('id_applicant',$applicant)->first();
	if($data["id_applicant"] != $applicant)
	{
	return redirect("/profile/applicant/profile/experiences")
	->withSuccess("Something went wrong !");
	}
		$infos = experience::where('id',$id)->where('id_applicant',$applicant)->firstOrFail();
		$data = ['id' => $id];
		
	foreach (array_keys($this->infos) as $field) {
			$data[$field] = old($field, $infos->$field);
    }	

	return view('profile.applicant.profile.experiences.edit', $data);
	}
	
	public function update(ProfileExperiencesUpdateRequest $request,$id)
	{
		$data=experience::select('id_applicant')->where('id',$id)->first();
		if( $data["id_applicant"] !=Auth::user()->id)
		{
			return redirect("/profile/applicant/profile/experiences")
			->withSuccess("Something went wrong !");
		}
		else{
			$fields = experience::where('id',$id)->firstOrFail();
			foreach (array_keys($this->infos) as $field) {
				$fields->$field= htmlentities($request->__get($field));
			}	
		$fields->save();
			
		return redirect("/profile/applicant/profile/experiences")
        ->withSuccess("Changes saved !");
		}
	}
  
public function store(ProfileExperiencesUpdateRequest $request)
  {
    $infos = new experience();
	
    foreach (array_keys($this->infos) as $field) {
      $infos->$field = htmlentities($request->__get($field));
    }
	
	
	$infos->id_applicant=Auth::user()->id;
	
    $infos->save();
	
    return redirect('/profile/applicant/profile/experiences')
        ->withSuccess("Changes was saved with success !");
  }
  
  public function create()
  {
    $infos = [];
    foreach ($this->infos as $field => $default) {
      $infos[$field] = old($field, $default);
    }
	
    return view('profile.applicant.profile.experiences.create',$infos);
  }
  
   public function destroy($id)
  {
	 $data=experience::select('id_applicant')->where('id',$id)->first();
		if( $data["id_applicant"] !=Auth::user()->id)
		{
			return redirect("/profile/applicant/profile/experiences")
			->withSuccess("Something went wrong !");
		}
		else{
			$infos = experience::where('id',$id)->firstOrFail();	
			$infos->delete();
		
		return redirect("/profile/applicant/profile/experiences")
        ->withSuccess("The experience '$infos->mission_name' has been deleted.");
		}
  }
}