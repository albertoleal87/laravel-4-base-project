<?php

class Profile_actionsController extends BaseController {

	/**
	 * Profile_action Repository
	 *
	 * @var Profile_action
	 */
	protected $profile_action;

	public function __construct(Profile_action $profile_action)
	{
		$this->profile_action = $profile_action;
		Parent::__construct();
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$profile_actions = $this->profile_action->all();

		return View::make('profile_actions.index', compact('profile_actions'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('profile_actions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Profile_action::$rules);

		if ($validation->passes())
		{
			$this->profile_action->create($input);

			return Redirect::route('profile_actions.index');
		}

		return Redirect::route('profile_actions.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$profile_action = $this->profile_action->findOrFail($id);

		return View::make('profile_actions.show', compact('profile_action'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$profile_action = $this->profile_action->find($id);

		if (is_null($profile_action))
		{
			return Redirect::route('profile_actions.index');
		}

		return View::make('profile_actions.edit', compact('profile_action'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Profile_action::$rules);

		if ($validation->passes())
		{
			$profile_action = $this->profile_action->find($id);
			$profile_action->update($input);

			return Redirect::route('profile_actions.show', $id);
		}

		return Redirect::route('profile_actions.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->profile_action->find($id)->delete();

		return Redirect::route('profile_actions.index');
	}

}
