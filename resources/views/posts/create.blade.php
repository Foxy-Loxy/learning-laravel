@extends('layout.master')

@section('content')
<h2>Publish a post</h2>
<hr>
<form method="POST" action="/posts">
	{{csrf_field()}}
  	<div class="form-group">
    	<label for="title">Title</label>
    	<input type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter post title here" name="title">
  	</div>
  	<div class="form-group">
    	<label for="post-body">Post body</label>
    	<textarea name="body" id="body" class="form-control"></textarea>
  	</div>
  	<div class="form-group">
  		<button type="submit" class="btn btn-primary">Publish</button>
  	</div>
  	@include('layout.error')
</form>
@endsection