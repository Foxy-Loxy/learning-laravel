@extends('layout.master')

@section('content')
	<div class="col-sm-8">
		<h1>Register</h1>
		<form method="POST" action="/register">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="Name">Name:</label>
				<input type="text" name="name" id="name" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="email">E-Mail:</label>
				<input type="email" name="email" id="email" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="passowrd">Password:</label>
				<input type="password" name="password" id="password" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="password_confirmation">Password Confirmation:</label>
				<input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
			</div>
			<div class="form-group">
				@include('layout.error')
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
	</div>
@endsection