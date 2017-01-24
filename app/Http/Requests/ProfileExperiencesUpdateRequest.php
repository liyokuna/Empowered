<?php
namespace App\Http\Requests;

class ProfileExperiencesUpdateRequest extends Request
{

  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    return 	
	$info=[
	'business_name'=>'required',
	'mission_name'=>'required',
	'field'=>'required',
	'month_beginning'=>'required',
	'year_beginning'=>'required',
	'month_ending'=>'required',
	'year_ending'=>'required',
	'description'=>'required',
	'city'=>'required',
	'country'=>'required',
	];
  }
}