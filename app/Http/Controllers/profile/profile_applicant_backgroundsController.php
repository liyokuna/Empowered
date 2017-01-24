<?php
namespace App\Http\Controllers\profile;

use Auth;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\background;

use App\Http\Requests\ProfileBackgroundsUpdateRequest;

class profile_applicant_backgroundsController extends Controller
{
	protected $infos = [
	'university'=>'',
	'majors'=>'',
	'minors'=>'',
	'additionnal'=>'',
	'beginning'=>'',
	'ending'=>'',
	'city'=>'',
	'country'=>'',
	];
	public function index(){
		$id = Auth::user()->id;
		$datas=background::where('id_applicant',$id)->get();
		$experiences_count=background::where('id_applicant',$id)->count();
		return view('profile.applicant.profile.backgrounds.index',compact('datas','experiences_count'));
	}
	
	public function edit($id)
	{
	$applicant= Auth::user()->id;
	$data=background::select('id','id_applicant')->where('id',$id)->where('id_applicant',$applicant)->first();
	if($data["id_applicant"] != $applicant)
	{
	return redirect("/profile/applicant/profile/backgrounds")
	->withSuccess("Something went wrong !");
	}
	else{
		$infos = background::where('id',$id)->where('id_applicant',$applicant)->firstOrFail();
		$data = ['id' => $id];
		
	foreach (array_keys($this->infos) as $field) {
			$data[$field] = old($field, $infos->$field);
    }	

	return view('profile.applicant.profile.backgrounds.edit', $data);
	}
	}
	
	public function update(ProfileBackgroundsUpdateRequest $request,$id)
	{
		$data=background::select('id_applicant')->where('id',$id)->first();
		if( $data["id_applicant"] !=Auth::user()->id)
		{
			return redirect("/profile/applicant/profile/backgrounds")
			->withSuccess("Something went wrong !");
		}
		else{
			$infos = background::where('id',$id)->firstOrFail();
			foreach (array_keys($this->infos) as $field) {
				$infos->$field= htmlentities($request->__get($field));
			}	
		$infos->save();
		
		return redirect("/profile/applicant/profile/backgrounds")
        ->withSuccess("Changes saved !");
		}
	}
  
public function store(ProfileBackgroundsUpdateRequest $request)
  {
    $infos = new background();
	
    foreach (array_keys($this->infos) as $field) {
      $infos->$field = htmlentities($request->__get($field));
    }
	
	
	$infos->id_applicant=Auth::user()->id;
	
    $infos->save();
	
    return redirect('/profile/applicant/profile/backgrounds')
        ->withSuccess("Changes was saved with success !");
  }
  
  public function create()
  {
    $infos = [];
    foreach ($this->infos as $field => $default) {
      $infos[$field] = old($field, $default);
    }
	
    return view('profile.applicant.profile.backgrounds.create',$infos);
  }
  
    public function destroy($id)
  {
	 $data=background::select('id_applicant')->where('id',$id)->first();
		if( $data["id_applicant"] !=Auth::user()->id)
		{
			return redirect("/profile/applicant/profile/backgrounds")
			->withSuccess("Something went wrong !");
		}
		else{
			$infos = background::where('id',$id)->firstOrFail();	
			$infos->delete();
		
		return redirect("/profile/applicant/profile/backgrounds")
        ->withSuccess("The '$infos->university' has been deleted.");
		}
  }
}