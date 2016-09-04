<?php namespace Adbiro\Biroa\Jobs;
use Adbiro\Biroa\Commanding\CommandHandler;
use Biroa\Jobs\Job;
use Symfony\Component\EventDispatcher\EventDispatcher;

/**
 * Created by PhpStorm.
 * User: biroa
 * Date: 9/4/2016
 * Time: 5:16 PM
 */

class PostJobListingCommandHandler implements CommandHandler
{
	protected $job;

	private $dispatcher;
	
	public function __construct(Job $job, EventDispatcher $dispatcher)
	{
		$this->job = $job;
		$this->dispatcher = $dispatcher;
	}
	
	
	/**
	 * @param $command
	 */
	public function handle($command)
	{
		$job = $this->job->post(
			$command->title,
			$command->description
		);
		
		$this->dispatcher->dispatch($job->releaseEvents());
	}
}