<?php

class ProfilesController extends BaseController {

	protected $layout = 'layouts.main';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$profiles = Profile::all();
		
		$this->layout->title = trans('profiles.title');
		$this->layout->content = View::make('profiles.index', compact('profiles'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$profile = new Profile();
		
		$this->layout->title = trans('profiles.create');
		$this->layout->content = View::make('profiles.create', compact('profile'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$profile = new Profile(Input::all());
		$profile->enabled = Input::get('enabled') == 1 ? 1 : 0 ;
		
		if($profile->save()){
			return Redirect::route('profiles.index')->with('success', trans('profiles.created_successful') );
		}else{
			return Redirect::route('profiles.create')->withInput()->withErrors($profile->errors());
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$profile = Profile::findOrFail($id);
		
		$this->layout->title = trans('profiles.show');
		$this->layout->content = View::make('profiles.show', compact('profile'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$profile = Profile::findOrFail($id);

		$this->layout->title = trans('profiles.edit');
		$this->layout->content = View::make('profiles.edit', compact('profile'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$profile = Profile::findOrFail($id);
		$profile->fill(Input::all());
		$profile->enabled = Input::get('enabled') == 1 ? 1 : 0 ;

		if($profile->updateUniques()){
			return Redirect::route('profiles.index')->with('success', trans('profiles.updated_successful') );
		}else{
			return Redirect::route('profiles.edit', $id)->withInput()->withErrors($profile->errors());
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if(Profile::destroy($id)){
			return Redirect::route('profiles.index')->with('success', trans('profiles.deleted_successful') );
		}else{
			return Redirect::route('profiles.index')->with('danger', trans('profiles.deleted_error') );
		}
	}

}
