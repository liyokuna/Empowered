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
use App\Http\Requests\adminBusinessUpdateRequest;

class adminApplicantsController extends Controller
{
	protected $infos = [
	'name'=>'',
	'email'=>'',
	'bearer'=>'',
	'status'=>'',
	];
	public function index(){
	
		$applicants=authorization::where('bearer','AP')->paginate(15);
		$applicants_yes=authorization::where('bearer','AP')->where('status','YES')->count();
		$applicants_no=authorization::where('bearer','AP')->where('status','NO')->count();
		return view('profile.admin.applicants.index',compact('applicants','applicants_yes','applicants_no'));
	}
	
	public function edit($id)
	{
			
		$infos = authorization::where('id',$id)->where('bearer','AP')->firstOrFail();
		$data = ['id' => $id];
		
	foreach (array_keys($this->infos) as $field) {
			$data[$field] = old($field, $infos->$field);
    }	

	return view('profile.admin.applicants.edit', $data);
	}
	
	public function update(adminBusinessUpdateRequest $request,$id)
	{

		$infos = authorization::where('id',$id)->where('bearer','AP')->firstOrFail();
		foreach (array_keys($this->infos) as $field) {
			$infos->$field= htmlentities($request->__get($field));
		}	
		
		$infos->save();
			
		return redirect("/profile/admin/applicants")
        ->withSuccess("Changes saved !");
	}
}