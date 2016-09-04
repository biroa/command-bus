<?php namespace Adbiro\Biroa\Jobs;
use Adbiro\Biroa\Commanding\CommandHandler;
/**
 * Created by PhpStorm.
 * User: biroa
 * Date: 9/4/2016
 * Time: 5:16 PM
 */

class PostJobListingCommandHandler implements CommandHandler
{
	/**
	 * @param $command
	 */
	public function handle($command)
	{
		var_dump('delegate process of posting a job listing');
	}
}