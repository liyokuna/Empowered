<?php
namespace App\Http\Requests;

class ProfileInfosUpdateRequest extends Request
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
	'about_you'=>'required',
	'linkedin'=>'required',
	'github'=>'required',
	'website'=>'required',
	'position'=>'required',
	];
  }
}