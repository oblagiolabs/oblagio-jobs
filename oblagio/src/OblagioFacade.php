<?php namespace Oblagio;

use Illuminate\Support\Facades\Facade;

class OblagioFacade extends Facade

{

	public static function getFacadeAccessor()

	{
		return 'register-oblagio';
	}

}