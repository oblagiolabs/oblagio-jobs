<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;


class AuthController extends Controller
{

	protected $user;

	public function __construct(User $user)

	{
		$this->user = $user;
	}

    public function registrasi()

    {
    	$model = $this->user;

    	return view('registrasi' , compact('model'));
    }

    public function registrasiValidate(Request $request)

    {
    	$validation = \Validator::make($request->all() , $this->user->rules);

    	if($validation->fails())

    	{
    		$errors = $validation->getMessageBag()->getMessages();

    		$messages = "<ul>";

    		foreach($errors as $key => $val)
    		
    		{
				$messages .= "<li>".$val[0]."</li>";
			}

			$messages .= "</ul>";
    	}
    	
    	return \Response::json([

    		'messages' => $messages

    	]);
    }
}
