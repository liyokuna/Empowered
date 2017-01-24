<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers\profile;

use Auth;
use App\social_network;
use Socialite;
use App\Http\Controllers\Controller;

class linkedinController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

	public function redirectToProvider()
    {
        return Socialite::driver('linkedin')->redirect();
    }
	
	public function handleProviderCallback()
    {
		try{
			$user = Socialite::driver('linkedin')->user();
		} catch (Exception $e){
			return Redirect::to('auth/linkedin');
		}
		
		$authUser= $this->createorfind($user);
		
		return Redirect('/profile/applicant/profile')
		->withSuccess($authUser->name." ,you have successfully login to your Linkedin !");
    }
	
    protected function createorfind($linkedin_user)
    {
		 if ($authUser = social_network::where('linkedin_id', $linkedin_user->id)->first()) {
            return $authUser;
        }

        return social_network::create([
            'linkedin_id' => $linkedin_user->id,
            'name' => $linkedin_user->name,
			'avatar'=> $linkedin_user->avatar,
            'id_applicant' => Auth::user()->id,
        ]);
    }
}
