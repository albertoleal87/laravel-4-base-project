<?php

class HomeController extends BaseController {

    public function getIndex(){
        if(Auth::check()){
			return View::make('hello');
        }else{
            return View::make('login');
        }
    }

    public function getLogin(){
        return View::make('login');
    }

    public function postLogin(){
        $loginData = array(
            'email'		=> Input::get('email'),
            'password'	=> Input::get('password')
        );
        if(Auth::attempt($loginData)){
            return Redirect::to('/')->with('success', 'Iniciaste sesion');
        }else{
            return Redirect::to('/')->with('danger', 'Datos incorrectos')->withInput();
        }
    }

    public function getLogout(){
        Auth::logout();
        return Redirect::to('/')->with('warning', 'Cerraste sesión');
    }

}
