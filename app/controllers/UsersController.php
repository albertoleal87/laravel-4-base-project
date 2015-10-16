<?php

class UsersController extends BaseController {

	protected $layout = 'layouts.main';
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::with('profile')->get();
		
		$this->layout->title = trans('users.title');
		$this->layout->content = View::make('users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$user = new User();
		$profiles = Profile::lists('name','id');
		
		$this->layout->title = trans('users.create_user');
		$this->layout->content = View::make('users.create', compact('user','profiles'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$user = new User(Input::all());
		$user->password = Hash::make(Input::get('password'));
		$user->enabled = Input::get('enabled') == 1 ? 1 : 0 ;

		if($user->save()){
			return Redirect::route('users.index')->with('success', trans('users.user_created_successful'));
		}else{
			return Redirect::route('users.create')->withInput()->withErrors($user->errors());
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
		$user = User::findOrFail($id);
		$profiles = Profile::lists('name','id');
		
		$this->layout->title = trans('users.show_user');
		$this->layout->content = View::make('users.show', compact('user','profiles'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::findOrFail($id);
		$profiles = Profile::lists('name','id');
		
		$this->layout->title = trans('users.edit_user');
		$this->layout->content = View::make('users.edit', compact('user','profiles'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{	
		$user = User::findOrFail($id);
		$user->fill(Input::all());
		$user->enabled = Input::get('enabled') == 1 ? 1 : 0 ;

		if($user->updateUniques()){
			return Redirect::route('users.index')->with('success', trans('users.user_updated_successful'));
		}else{
			return Redirect::route('users.edit', $id)->withInput()->withErrors($user->errors());
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
		if(User::destroy($id)){
			return Redirect::route('users.index')->with('success', trans('users.user_deleted_successful'));
		}else{
			return Redirect::route('users.index')->with('danger', trans('users.user_deleted_error'));
		}
	}

}
