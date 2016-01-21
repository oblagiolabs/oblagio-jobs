<?php namespace Oblagio;


class Oblagio

{
	public $applicationName;

	public $assetUrl;

	public $assetBootstrap;

	public function __construct()

	{
		$this->applicationName = config('config.applicationName');
	
		$this->assetUrl = asset(null);

		$this->assetBootstrap = $this->assetUrl.'bootstrap/';
	}


	
}

?>