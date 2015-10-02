<?php

class BaseController extends Controller {

	public function __construct(){
		Log::debug(Route::currentRouteName());
		if(Auth::check() && !empty(Route::currentRouteName()) && !User::canAccess(Route::currentRouteName())){
			Redirect::to('access-denied')->send();
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
