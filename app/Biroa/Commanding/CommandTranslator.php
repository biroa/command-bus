<?php namespace Biroa\Jobs;
/**
 * Created by PhpStorm.
 * User: biroa
 * Date: 9/4/2016
 * Time: 5:04 PM
 */

use Exception;

class CommandTranslator
{
	public function toCommandHandler($command)
	{
		//PostJobListingCommandHandler
		$handler = str_replace('Command','CommandHandler', get_class($command));
		if(! class_exists($handler))
		{
			$message = 'Commad handler' . $handler . 'does not exist.';
			
			throw new Exception($message);
		}
		
		return $handler;
		
	}
}