<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create() {

    	return view('layout.register');

    }

    public function store(){

    	$this->validate(request(), [
    		'name' => 'required',
    		'email' => 'required|email',
    		'password' => 'required|confirmed'
    	]);

    	$req = request([
    		'name',
    		'email',
    		'password']);

    	$req['password'] = bcrypt($req['password']);

    	$user = User::create($req);

    	auth()->login($user);

    	return redirect()->home();
    }
}
