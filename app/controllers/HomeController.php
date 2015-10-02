<?php

class HomeController extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    public function getIndex(){
        if(Auth::check()){
			return View::make('hello');
        }else{
            return View::make('login');
        }
    }

    public function getLogin(){
        return Redirect::to('/');
    }

    public function postLogin(){
        $loginData = array(
            'email'		=> Input::get('email'),
            'password'	=> Input::get('password'),
            'enable' => 1,
        );
        if(Auth::attempt($loginData)){
            Session::put('permissions', Auth::user()->permissions());
            return Redirect::to('/')->with('success', 'Iniciaste sesion');
        }else{
            return Redirect::to('/')->with('danger', 'Datos incorrectos')->withInput();
        }
    }

    public function getLogout(){
        Auth::logout();
        Session::forget('permissions');
        return Redirect::to('/')->with('warning', 'Cerraste sesión');
    }

    public function getAccessDenied(){
        return View::make('access_denied');        
    }

}
