<?php namespace Biroa\Jobs;
/**
 * Created by PhpStorm.
 * User: biroa
 * Date: 9/4/2016
 * Time: 8:47 PM
 */


class JobWasPosted
{
	public $job;
	
	function __construct(Job $job)
	{
		$this->job = $job;
	}
}