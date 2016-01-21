<?php namespace Oblagio;

use Illuminate\Support\ServiceProvider;
use Oblagio\Oblagio;

class OblagioProvider extends ServiceProvider

{

	public function boot()

	{
		//
	}

	public function register()

	{

		$this->mergeConfigFrom(__DIR__.'/Config.php' , 'config');

		$this->app->bind('register-oblagio' , function(){

			return new Oblagio;

		});
	}

}