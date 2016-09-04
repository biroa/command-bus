<?php namespace Biroa\Commanding;
/**
 * Created by PhpStorm.
 * User: biroa
 * Date: 9/4/2016
 * Time: 5:17 PM
 */

interface CommandHandler
{
	/**
	 * Handle the command
	 *
	 * @param $command
	 * @return mixed
	 */
	public function handle($command);
}