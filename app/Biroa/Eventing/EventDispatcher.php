<?php namespace Biroa\Eventing;
use Illuminate\Bus\Dispatcher;
use Log;

/**
 * Created by PhpStorm.
 * User: biroa
 * Date: 9/4/2016
 * Time: 7:48 PM
 */


class EventDispatcher
{
	protected $event;
	protected $log;
	
	/**
	 * EventDispatcher constructor.
	 *
	 * @param \Illuminate\Bus\Dispatcher $event
	 */
	public function __construct(Dispatcher $event, Writer $log)
	{
		$this->event = $event;
		$this->log = $log;
	}
	
	/**
	 * @param array $events
	 */
	public function dispatch(array $events){
		foreach ($events as $event)
		{
			$eventName = $this->getEventName($event);
			$this->event->fire($eventName,$event);
			$this->log->info("$eventName was fired");
		}
	}
	
	/**
	 * @param $event
	 *
	 * @return mixed
	 */
	protected function getEventName($event)
	{
		return str_replace('\\', '.', get_class($event));

	}
}