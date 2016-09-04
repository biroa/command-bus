<?php namespace Adbiro\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: biroa
 * Date: 9/4/2016
 * Time: 4:33 PM
 */

use Biroa\Commanding\CommandBus;
use Biroa\Jobs\PostJobListingCommand;
use Illuminate\Routing\Controller as BaseController;


class JobsController extends BaseController
{
	protected $commandBus;
	
	public function __construct(CommandBus $commandBus)
	{
		$this->commandBus = $commandBus;
	}
	
	/**
	 * Store a new job
	 *
	 * @return Response
	 */
	public function store(){
		
		
		
		$title =  $request->input('title');
		$description =  $request->input('description');
		
		$command = new PostJobListingCommand($title,$description);
		
		$this->commandBus->execute($command);
	}
}