<?php
namespace App\Http\Requests;

class adminBusinessUpdateRequest extends Request
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
	'name'=>'required',
	'email'=>'required',
	'bearer'=>'required',
	'status'=>'required',
	];
  }
}