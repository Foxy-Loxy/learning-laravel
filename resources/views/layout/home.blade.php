@extends('layout.master')

@section('content')
<h2>Hello, {{ Auth::user()->name }}</h2>
<hr>
<h3>Menu</h3>

<form method="POST" action="/logout">
	{{ csrf_field() }}
	<div class="list-group form-group">
	  <a href="#" class="list-group-item disabled">My Posts</a>
	  <a href="#" class="list-group-item disabled">My Comments</a>
	</div>
	<hr>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Log Out</button>
	</div>
</form>
@endsection