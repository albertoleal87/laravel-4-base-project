<?php

class BaseController extends Controller {

	public function __construct(){
		if(Auth::check() && !User::canAccess(Route::currentRouteName())){
			Redirect::to('access_denied')->send();
		}	
	}

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
