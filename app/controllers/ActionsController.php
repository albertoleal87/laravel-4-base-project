<?php

class ActionsController extends BaseController {

	protected $layout = 'layouts.main';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$actions = Action::all();
		
		$this->layout->title = 'actions';
		$this->layout->content = View::make('actions.index', compact('actions'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$action = new Action();
		
		$this->layout->title = 'Create actions';
		$this->layout->content = View::make('actions.create', compact('action'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$action = new Action(Input::all());
		
		if($action->save()){
			return Redirect::route('actions.index')->with('success', 'action created successful');
		}else{
			return Redirect::route('actions.create')->withInput()->withErrors($action->errors());
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
		$action = Action::findOrFail($id);
		
		$this->layout->title = 'Show action';
		$this->layout->content = View::make('actions.show', compact('action'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$action = Action::findOrFail($id);

		$this->layout->title = 'Edit action';
		$this->layout->content = View::make('actions.edit', compact('action'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$action = Action::findOrFail($id);

		if($action->update(Input::all())){
			return Redirect::route('actions.index')->with('success', 'action updated successful');
		}else{
			return Redirect::route('actions.edit', $id)->withInput()->withErrors($action->errors());
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
		if(Action::destroy($id)){
			return Redirect::route('actions.index')->with('success', 'action deleted successful');
		}else{
			return Redirect::route('actions.index')->with('danger', 'An error occurred while trying to delete the action');
		}
	}

}
