<?php namespace Adbiro\Biroa\Commanding;
use Illuminate\Foundation\Application;
/**
 * Created by PhpStorm.
 * User: biroa
 * Date: 9/4/2016
 * Time: 4:54 PM
 */

class CommandBus
{
	private $app;
	protected $commandTranslator;
	
	public function __construct(Application $app,
	                            CommandTranslator $commandTranslator)
	{
		$this->app = $app;
		$this->commandTranslator = $commandTranslator;
	}
	
	public function execute($command)
	{
		//@Todo:: Translate that object name into a handler class
		$handler = $this->commandTranslator->toCommandHandler($command);
		
		//@Todo:: Resolve out of IOC container, and call handle method
		return $this->app->make($handler)->handle($command);
		
		
	}
	
	
}