<?php namespace Adbiro\Biroa\Jobs;
/**
 * Created by PhpStorm.
 * User: biroa
 * Date: 9/4/2016
 * Time: 5:16 PM
 */

use Adbiro\Biroa\Commanding\CommandHandler;

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