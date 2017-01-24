<?php
namespace App\Http\Controllers\profile;

use Auth;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\skills;
use App\background;
use App\experience;
use App\extra_info;
use App\authorization;
use App\Http\Requests\ProfileInfosUpdateRequest;

class profile_applicant_infosController extends Controller
{
	protected $extra_infos = [
	'about_you'=>'',
	'linkedin'=>'',
	'github'=>'',
	'website'=>'',
	'position'=>'',
	];
	public function index(){
		$id = Auth::user()->id;
		$data=extra_info::where('id_applicant',$id)->firstOrFail();
		$count_data=extra_info::where('id_applicant',$id)->count();
		return view('profile.applicant.profile.infos.index',compact('data','count_data'));
	}
	
	public function edit($id)
	{
		
		if($id!=Auth::user()->id)
		{
			return redirect("/profile/applicant/profile/infos")
			->withSuccess("Something went wrong !");
		}else{
		
		$infos = extra_info::where('id_applicant',$id)->firstOrFail();
		$data = ['id' => $id];
		
	foreach (array_keys($this->extra_infos) as $field) {
			$data[$field] = old($field, $infos->$field);
    }	

	return view('profile.applicant.profile.infos.edit', $data);
	}
	}
	
	public function update(ProfileInfosUpdateRequest $request,$id)
	{
		if($id!=Auth::user()->id)
		{
			return redirect("/profile/applicant/profile")
			->withSuccess("Something went wrong !");
		}
		else{
			$infos = extra_info::where('id_applicant',$id)->firstOrFail();
			foreach (array_keys($this->extra_infos) as $field) {
				$infos->$field= htmlentities($request->__get($field));
			}	
			$infos->save();
		return redirect("/profile/applicant/profile/infos")
        ->withSuccess("Changes saved !");
		}
	}
  
public function store(ProfileInfosUpdateRequest $request)
  {
    $infos = new extra_info();
	
	$authorization_credentials = new authorization();
	
    foreach (array_keys($this->extra_infos) as $field) {
      $infos->$field = htmlentities($request->__get($field));
    }
	
	$authorization_credentials->name= Auth::user()->name;
	$authorization_credentials->email= Auth::user()->email;
	$authorization_credentials->bearer= Auth::user()->status;
	$authorization_credentials->status= 'NO';
	
	$infos->id_applicant=Auth::user()->id;
	
    $infos->save();
	$authorization_credentials->save();
	
    return redirect('/profile/applicant/profile/infos')
        ->withSuccess("Your informations was saved with success !");
  }
  
  public function create()
  {
    $infos = [];
    foreach ($this->extra_infos as $field => $default) {
      $infos[$field] = old($field, $default);
    }
	
    return view('profile.applicant.profile.infos.create', $infos);
  }
}