<?php
namespace App\Http\Controllers\profile;

use Auth;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\User;
use App\Http\Requests\admin_passwordUpdateRequest;

class settings_applicantPasswordController extends Controller
{
	protected $infos = [
	'password'=>'',
	];
	
	public function edit($id)
	{
		$identification=Auth::user()->id;
		if($identification != $id)
		{
		return redirect("/profile/applicant/profile/settings/password")
        ->withSuccess("Something went wrong !");
		}
		$infos = User::where('id',$id)->firstOrFail();
		$data = ['id' => $id];
		
	foreach (array_keys($this->infos) as $field) {
			$data[$field] = old($field, $infos->$field);
    }	

	return view('profile.applicant.profile.settings.password.edit', $data);
	}
	
	
	
	public function update(admin_passwordUpdateRequest $request,$id)
	{
		$infos = User::where('id',$id)->firstOrFail();
		foreach (array_keys($this->infos) as $field) {
			$infos->$field= bcrypt(htmlentities($request->__get($field)));
		}	
		$infos->save();
			
		return redirect("/profile/applicant/profile/settings")
        ->withSuccess("Changes saved !");
	}
	
}