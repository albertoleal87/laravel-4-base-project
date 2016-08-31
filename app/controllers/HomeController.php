<?php

class HomeController extends BaseController {

    protected $layout = 'layouts.main';

    public function __construct(){
        parent::__construct();
    }

    public function getIndex(){
        if(Auth::check()){
			return View::make('layouts.main')->with(array('content'=>'','title'=>trans('menu.dashboard')));
        }else{
            return View::make('login');
        }
    }

    public function getLogin(){
        return Redirect::to('/');
    }

    public function postLogin(){

        Session::put('lang', Input::get('lang'));            
        Config::set('app.locale',Session::get('lang'));
        
        $loginData = array(
            'email'		=> Input::get('email'),
            'password'	=> Input::get('password'),
        );

        if(Auth::attempt($loginData)){

            if(Auth::user()->enabled != 1){
                Auth::logout();
                return Redirect::to('/')->with('danger', trans('forms.login_user_inactive'))->withInput();
            }
            
            if(Auth::user()->profile->enabled != 1){
                Auth::logout();
                return Redirect::to('/')->with('danger', trans('forms.login_profile_inactive'))->withInput();
            }

            Session::put('permissions', Auth::user()->profile->actions_enabled()->lists('name','id'));

            return Redirect::to('/')->with('success', trans('forms.login_welcome',['user_name'=>Auth::user()->name]));
        }else{
            return Redirect::to('/')->with('danger', trans('forms.login_error'))->withInput();
        }
    }

    public function getLogout(){
        Auth::logout();
        Session::forget('permissions');
        Session::forget('lang');
        return Redirect::to('/')->with('success', trans('forms.login_good_bay'));
    }

    public function getAccessDenied(){
        return View::make('access_denied');
    }

    public function getLogs($param=null){
        if(!Auth::check()){
            return Redirect::to('/');
        }

        $files = File::files(storage_path()."/logs");
        foreach ($files as $key => $file) {
            $files[$key] = pathinfo($file, PATHINFO_BASENAME);
            if($files[$key] == $param){
                $content = str_replace(["\n","\r","\r\n"], "<br>", File::get($file));
                $this->layout->content = View::make('logs', compact('content'));
                return;
            }
        }

        $this->layout->content = View::make('logs', compact('files'));

    }


}
