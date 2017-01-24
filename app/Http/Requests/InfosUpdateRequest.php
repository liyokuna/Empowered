<?php
namespace App\Http\Requests;

class InfosUpdateRequest extends Request
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
	$about =[
      'name' => 'required',
      'description' => 'required',
	  'number' => 'required',
	  'street' => 'required',
	  'city' => 'required',
	  'country' => 'required',
    ];
	
	$links = [
	'facebook'=>'required',
	'twitter'=>'required',
	'linkedin'=>'required',
	'website'=>'required',
	'phone'=>'required',
	'fields'=>'required',
	];
	
  }
}