<?php
namespace App\Http\Requests;

class ProfileBackgroundsUpdateRequest extends Request
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
	'university'=>'required',
	'majors'=>'required',
	'minors'=>'required',
	'beginning'=>'required',
	'ending'=>'required',
	'city'=>'required',
	'country'=>'required',
	];
  }
}