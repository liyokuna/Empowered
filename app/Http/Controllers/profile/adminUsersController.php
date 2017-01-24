<?php
namespace App\Http\Controllers\profile;

use Auth;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\User;
use APP\authorization;
use App\Http\Requests\adminUsersUpdateRequest;
use Illuminate\Http\Request;

class adminUsersController extends Controller
{
	protected $infos = [
	'email'=>''
	];
	
	public function index(){
		
		$credentials = User::orderBy('created_at','desc')->FirstOrFail();
		return view('profile.admin.user.index',compact('credentials'));
	}
	
	public function edit($id)
	{

		$infos = User::where('id',$id)->select('email')->FirstOrFail();
		$data = ['id' => $id];
		
	foreach (array_keys($this->infos) as $field) {
			$data[$field] = old($field, $infos->$field);
    }	

	return view('profile.admin.user.edit', $data);
	}
	
	
	
	public function update(UsersUpdateRequest $request,$id)
	{
		$infos = User::where('id',$id)->select('email')->FirstOrFail();
		$infos = ['id'=>$id];
		foreach (array_keys($this->infos) as $field) {
			$infos->$field = htmlentities($request->__get($field));
		}	
		$infos->save();
			
		return redirect("/profile/admin/users")
        ->withSuccess("Changes saved !");
	}
	
}