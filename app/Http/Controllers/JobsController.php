<?php namespace Adbiro\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: biroa
 * Date: 9/4/2016
 * Time: 4:33 PM
 */

use Biroa\Jobs\PostJobListingCommand;
use Illuminate\Routing\Controller as BaseController;


class JobsController extends BaseController
{
	/**
	 *
	 */
	public function store(){
		
		$input = Input::only('title','description');
		new PostJobListingCommand($input['title'],$input['description']);
	}
}