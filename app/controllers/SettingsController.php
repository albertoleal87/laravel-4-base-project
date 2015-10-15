<?php

class SettingsController extends BaseController {

	protected $layout = 'layouts.main';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$settings = Setting::all();
		
		$this->layout->title = 'settings';
		$this->layout->content = View::make('settings.index', compact('settings'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$setting = new Setting();
		
		$this->layout->title = 'Create settings';
		$this->layout->content = View::make('settings.create', compact('setting'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$setting = new Setting(Input::all());
		
		if($setting->save()){
			return Redirect::route('settings.index')->with('success', 'setting created successful');
		}else{
			return Redirect::route('settings.create')->withInput()->withErrors($setting->errors());
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
		$setting = Setting::findOrFail($id);
		
		$this->layout->title = 'Show setting';
		$this->layout->content = View::make('settings.show', compact('setting'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$setting = Setting::findOrFail($id);

		$this->layout->title = 'Edit setting';
		$this->layout->content = View::make('settings.edit', compact('setting'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$setting = Setting::findOrFail($id);

		if($setting->update(Input::all())){
			return Redirect::route('settings.index')->with('success', 'setting updated successful');
		}else{
			return Redirect::route('settings.edit', $id)->withInput()->withErrors($setting->errors());
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
		if(Setting::destroy($id)){
			return Redirect::route('settings.index')->with('success', 'setting deleted successful');
		}else{
			return Redirect::route('settings.index')->with('danger', 'An error occurred while trying to delete the setting');
		}
	}

}
