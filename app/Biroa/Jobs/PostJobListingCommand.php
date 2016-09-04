<?php namespace Adbiro\Biroa\Jobs;
/**
 * Created by PhpStorm.
 * User: biroa
 * Date: 9/4/2016
 * Time: 4:44 PM
 */


class PostJobListingCommand
{
	public $title;
	
	public $description;
	
	public function __construct($description,$title)
	{
		$this->description = $description;
		$this->title = $title;
	}
}