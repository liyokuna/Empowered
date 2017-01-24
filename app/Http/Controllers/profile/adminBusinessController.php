<?php
namespace App\Http\Controllers\profile;

use Auth;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\authorization;
use App\Http\Requests\adminBusinessUpdateRequest;

class adminBusinessController extends Controller
{
	protected $infos = [
	'name'=>'',
	'email'=>'',
	'bearer'=>'',
	'status'=>'',
	];
	public function index(){
	
		$businesses=authorization::where('bearer','BU')->paginate(15);
		$businesses_yes=authorization::where('bearer','BU')->where('status','YES')->count();
		$businesses_no=authorization::where('bearer','BU')->where('status','NO')->count();
		return view('profile.admin.businesses.index',compact('businesses','businesses_yes','businesses_no'));
	}
	
	public function edit($id)
	{
			
		$infos = authorization::where('id',$id)->where('bearer','BU')->firstOrFail();
		$data = ['id' => $id];
		
	foreach (array_keys($this->infos) as $field) {
			$data[$field] = old($field, $infos->$field);
    }	

	return view('profile.admin.businesses.edit', $data);
	}
	
	public function update(adminBusinessUpdateRequest $request,$id)
	{

		$infos = authorization::where('id',$id)->where('bearer','BU')->firstOrFail();
		foreach (array_keys($this->infos) as $field) {
			$infos->$field= htmlentities($request->__get($field));
		}	
		
		$infos->save();
			
		return redirect("/profile/admin/business")
        ->withSuccess("Changes saved !");
	}
}