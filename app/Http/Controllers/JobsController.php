<?php namespace Adbiro\Http\Controllers;
use Adbiro\Biroa\Commanding\CommandBus;
use Adbiro\Biroa\Jobs\PostJobListingCommand;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

/**
 * Created by PhpStorm.
 * User: biroa
 * Date: 9/4/2016
 * Time: 4:33 PM
 */


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
	public function store(Request $request){
		
		
		
		$title =  $request->input('title');
		$description =  $request->input('description');
		
		$command = new PostJobListingCommand($title,$description);
		
		$this->commandBus->execute($command);
	}
}