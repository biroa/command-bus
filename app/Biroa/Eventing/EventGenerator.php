<?php namespace Biroa\Eventing;
/**
 * Created by PhpStorm.
 * User: biroa
 * Date: 9/4/2016
 * Time: 7:35 PM
 */



trait EventGenerator
{
	protected $pendingEvents = [];
	
	/**
	 * @param $event
	 */
	public function raise($event)
	{
		$this->pendingEvents[] = $event;
	}
	
	/**
	 * @return array
	 */
	public function releaseEvents()
	{
		$events = $this->pendingEvents;
		$this->pendingEvents = [];
		return $events;
	}
}