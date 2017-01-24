<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactMeRequest;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
	
	public function index(){
		
	}
	
    public function sendContactInfo(ContactMeRequest $request)
  {
    $data = $request->only('name', 'email', 'subject');
    $data['messageLines'] = explode("\n", $request->get('message'));

    Mail::send('emails.contact', $data, function ($message) use ($data) {
      $message->subject('Empowered Contact Form: '.$data['name'])
              ->to(config('empowered.contact_email'))
              ->replyTo($data['email']);
    });

    return back()
        ->withSuccess("Thank you for your message. It has been sent.");
  }
}
