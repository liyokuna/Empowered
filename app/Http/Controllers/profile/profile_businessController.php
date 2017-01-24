<?php
namespace App\Http\Controllers\profile;

use Auth;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\about_companies;
use App\social_links;
use App\Http\Requests\InfosUpdateRequest;
use App\authorization;

class profile_businessController extends Controller
{
	protected $fields_companies = [
	'name'=>'',
	'description'=>'',
	'number'=>'',
	'street'=>'',
	'city'=>'',
	'country'=>'',
	];
	
	protected $fields_links = [
	'facebook'=>'',
	'twitter'=>'',
	'linkedin'=>'',
	'website'=>'',
	'phone'=>'',
	'fields'=>'',
	];
	
	public function index()
	{		
		$id = Auth::user()->id;
		$business_infos=about_companies::where('id_company', $id )->first();
		$business_links=social_links::where('id_company',$id)->first();
		$exist_infos=about_companies::where('id_company',$id)->count();
		$exist_links=social_links::where('id_company',$id)->count();
		return view('profile.business.profile.index', compact('business_infos','business_links','exist_infos','exist_links'));
	}
	
	public function edit($id)
	{
	if($id!=Auth::user()->id)
		{
			    return redirect("/profile/business/profile")
				->withSuccess("Something went wrong !");
		}
	else{
		$tag = about_companies::where('id_company',$id)->firstOrFail();
		$tag_links = social_links::where('id_company',$id)->firstOrFail();
		$data = ['id' => $id];
		
	foreach (array_keys($this->fields_companies) as $field) {
			$data[$field] = old($field, $tag->$field);
    }	
	
	foreach (array_keys($this->fields_links) as $field) {
		$data_links[$field] = old($field, $tag_links->$field);
    }
	
	$result=array_merge($data, $data_links);

		return view('profile.business.profile.edit', $result);
	}
	}
	
	public function update(InfosUpdateRequest $request, $id)
	{
		if($id!=Auth::user()->id)
		{
			    return redirect("/profile/business/profile")
				->withSuccess("Something went wrong !");
		}
		else{
		$tag = about_companies::where('id_company',$id)->firstOrFail();
		$tag_links = social_links::where('id_company',$id)->firstOrFail();
		foreach (array_keys($this->fields_companies) as $field) {
		$tag->$field = htmlentities( $request->__get($field));
		}
		
		foreach (array_keys($this->fields_links) as $field) {
		$tag_links->$field = htmlentities($request->__get($field));
		}
		
		$tag_links->save();
		$tag->save();
		
    return redirect("/profile/business/profile")
        ->withSuccess("Changes saved !");
		}
  }
  
public function store(InfosUpdateRequest $request)
  {
    $infos = new about_companies();
	$links = new social_links();
	$authorization_credentials = new authorization();
	
    foreach (array_keys($this->fields_companies) as $field) {
      $infos->$field = htmlentities($request->__get($field));
    }
	
	foreach (array_keys($this->fields_links) as $field) {
      $links->$field = htmlentities($request->__get($field));
    }
	
	$authorization_credentials->name= Auth::user()->name;
	$authorization_credentials->email= Auth::user()->email;
	$authorization_credentials->bearer= Auth::user()->status;
	$authorization_credentials->status= 'NO';
	
	$infos->id_company=Auth::user()->id;
	$links->id_company=Auth::user()->id;
	
    $infos->save();
	$links->save();
	$authorization_credentials->save();
	
    return redirect('/profile/business/profile')
        ->withSuccess("Your profile was created !");
  }
  
  public function create()
  {
    $infos = [];
	$links=[];
    foreach ($this->fields_companies as $field => $default) {
      $infos[$field] = old($field, $default);
    }
	
	foreach ($this->fields_links as $field => $default) {
      $links[$field] = old($field, $default);
    }
	
	$data=array_merge($infos, $links);
	
    return view('profile.business.profile.create', $data);
  }
}