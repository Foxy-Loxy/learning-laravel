<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{

	public function __construct() {

        $this->middleware('guest');
        
    }

    public function destroy() {

    	auth()->logout();

    	return redirect()->home();

    }

    public function create() {

    	return view('layout.login');

    }

    public function store() {

    	$email = request(['email']);
    	$password = request(['password']);

    	if(! auth()->attempt(request(['email','password']))){

    		return back();

    	}

    	return redirect()->home(); 

    }

    public function show() {


    	return view('layout.home');

    }
}
