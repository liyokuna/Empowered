<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class picturesController extends Controller
{
	/*public function index($filename)
	{		
	
		$path = Config::get('assets.pictures').$filename;
		
		$file = new Symfony\Component\HttpFoundation\File\File($path);
		
		$response= Resmonse::make(
		File::get($path),
		200
		);
		
		$reponse->header(
		'Content-type',
		$file->getMimeType()
		);
		
		return $response;
	}
*/
}