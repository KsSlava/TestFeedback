<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Jobs\SendEmailByPause;
use App\Feedback;
use Mail;

class FeedbackController extends Controller
{
    


     public function saveAndSend(Request $request){



    	$this->validate($request, [

    		'email'       =>'required|regex:/[0-9a-zA-Z]+[@]{1}[0-9a-zA-Z]+[.]{1}[0-9a-zA-Z]+/|unique:feedback,email,',
			'name'        =>'required|min:3|max:30',
			'sname'       =>'required|min:5|max:30',
    	]);



    	$fb = Feedback::insertGetId([


    		'email'=>$request->email,
    		'name'=>$request->name,
    		'sname'=>$request->sname

    	]);



    	if($fb>0){

	    	$send= Mail::send( 'emails.feedback', 

	    		[ 

	    		  'email'=>$request->email,
	    		  'name'=>$request->name,
	    		  'sname'=>$request->sname

	    		],

	    		function($message){

	    		 	$message->to('infomixks@gmail.com', 'Администратору')->subject('Новый пользователь');

	    		}

	    	);


	    	dispatch(new SendEmailByPause($send))->delay(now()->addSeconds(1));


	    	return redirect('/');



    	}

    }
}
