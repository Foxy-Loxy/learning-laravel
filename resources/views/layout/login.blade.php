@extends('layout.master')

@section('content')
	<h1>Log In</h1>
	<form method="POST" action="/login">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="email">E-mail:</label>
			<input type="email" name="email" id="email" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" class="form-control" required>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Log In</button>
		</div>
		<div class="form-group">
			<span class="muted">Don't have an account ? <a href="/register">Sign Up</a> now !</span>
		</div>
		<div class="form-group">
			@include('layout.error')
		</div>
@endsection