<?php
namespace App\Http\Controllers\profile;

use Auth;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\User;
use App\Http\Requests\ProfileCredentialsUpdateRequest;

class settings_businessController extends Controller
{
	protected $infos = [
	'name'=>'',
	'email'=>'',
	'id'=>'',
	];
	public function index(){
		$id = Auth::user()->id;
		$credentials=User::where('id',$id)->first();
		return view('profile.business.settings.index',compact('credentials'));
	}
	
	public function edit($id)
	{
		$mail= Auth::user()->email;
	$data=User::select('id','email')->where('id',$id)->where('email',$mail)->first();
	if( $data["id"] !=Auth::user()->id && $data["email"] !=Auth::user()->email)
	{
	return redirect("/profile/business/settings")
	->withSuccess("Something went wrong !");
	}
	else{
		$infos = User::where('id',$id)->where('email',$mail)->firstOrFail();
		$data = ['id' => $id];
		
	foreach (array_keys($this->infos) as $field) {
			$data[$field] = old($field, $infos->$field);
    }	

	return view('profile.business.settings.edit', $data);
	}
	}
	
	public function update(ProfileCredentialsUpdateRequest $request,$id)
	{
		$data=User::select('id')->where('id',$id)->first();
		if( $data["id"] !=Auth::user()->id)
		{
			return redirect("/profile/business/settings")
			->withSuccess("Something went wrong !");
		}
		else{
			$infos = User::where('id',$id)->firstOrFail();
			foreach (array_keys($this->infos) as $field) {
				$infos->$field= htmlentities($request->__get($field));
			}	
		$infos->save();
			
		return redirect("/profile/business/settings")
        ->withSuccess("Changes saved !");
		}
	}
  
   /*public function destroy($id)
  {
	 $data=skills::select('id_applicant')->where('id',$id)->first();
		if( $data["id_applicant"] !=Auth::user()->id)
		{
			return redirect("/profile/applicant/profile/skills")
			->withSuccess("Something went wrong !");
		}
		else{
			$infos = user::where('id',$id)->firstOrFail();	
			$infos->delete();
		
		return redirect("/profile/applicant/profile/settings")
        ->withSuccess("The '$infos->skill_name' has been deleted.");
		}
  }*/
  
}