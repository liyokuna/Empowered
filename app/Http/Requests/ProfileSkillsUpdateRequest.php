<?php
namespace App\Http\Requests;

class ProfileSkillsUpdateRequest extends Request
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
	'skill_name'=>'required',
	'level'=>'required',
	];
  }
}