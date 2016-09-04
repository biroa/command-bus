<?php namespace Biroa\Jobs;
use Adbiro\Providers\EventServiceProvider;
use Biroa\Eventing\EventGenerator;
use Eloquent;

/**
 * Created by PhpStorm.
 * User: biroa
 * Date: 9/4/2016
 * Time: 7:21 PM
 */

class Job extends Eloquent
{
	use EventGenerator;
	
	/**
	 * @param $title
	 * @param $description
	 */
	public function post($title, $description)
	{
		$this->title = $title;
		$this->description = $description;
		
		$this->save();
		
		$this->raise(new JobWasPosted($this));
		
		return $this;
	}
}