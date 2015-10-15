<?php

class Profile_actionsController extends BaseController {

	protected $layout = 'layouts.main';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$profile_actions = Profile_action::all();
		
		$this->layout->title = 'profile_actions';
		$this->layout->content = View::make('profile_actions.index', compact('profile_actions'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$profile_action = new Profile_action();
		
		$this->layout->title = 'Create profile_actions';
		$this->layout->content = View::make('profile_actions.create', compact('profile_action'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$profile_action = new Profile_action(Input::all());
		
		if($profile_action->save()){
			return Redirect::route('profile_actions.index')->with('success', 'profile_action created successful');
		}else{
			return Redirect::route('profile_actions.create')->withInput()->withErrors($profile_action->errors());
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
		$profile_action = Profile_action::findOrFail($id);
		
		$this->layout->title = 'Show profile_action';
		$this->layout->content = View::make('profile_actions.show', compact('profile_action'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$profile_action = Profile_action::findOrFail($id);

		$this->layout->title = 'Edit profile_action';
		$this->layout->content = View::make('profile_actions.edit', compact('profile_action'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$profile_action = Profile_action::findOrFail($id);

		if($profile_action->update(Input::all())){
			return Redirect::route('profile_actions.index')->with('success', 'profile_action updated successful');
		}else{
			return Redirect::route('profile_actions.edit', $id)->withInput()->withErrors($profile_action->errors());
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
		if(Profile_action::destroy($id)){
			return Redirect::route('profile_actions.index')->with('success', 'profile_action deleted successful');
		}else{
			return Redirect::route('profile_actions.index')->with('danger', 'An error occurred while trying to delete the profile_action');
		}
	}

}
