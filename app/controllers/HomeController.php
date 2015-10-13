<?php

class HomeController extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    public function getIndex(){
        if(Auth::check()){
			return View::make('layouts.main')->with(array('content'=>'','title'=>'Dashboard'));
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
        );

        if(Auth::attempt($loginData)){

            if(Auth::user()->enabled != 1){
                Auth::logout();
                return Redirect::to('/')->with('danger', 'El usuario se encuentra inactivo')->withInput();
            }
            
            if(Auth::user()->profile->enabled != 1){
                Auth::logout();
                return Redirect::to('/')->with('danger', 'El perfil se encuentra inactivo')->withInput();
            }

            Session::put('permissions', Auth::user()->profile->actions_enabled()->lists('name','id'));

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
