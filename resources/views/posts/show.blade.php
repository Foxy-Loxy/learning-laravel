@extends('layout.master')

@section('content')
		@include('layout.post')
	    <a href="/">←To all posts</a>
	    <div class="comments">
	    <hr>
	    <ul class="list-group">
	    	@foreach($post->comments as $comment)
	    		<li class="list-group-item">
	    			<strong>
	    				{{ $comment->created_at->diffForHumans ()}} by <a href="/profile/{{ $comment->user->id }}">{{ $comment->user->name}}</a>
	    			</strong>
	    			<br>
		    		{{ $comment->body }}
	    		</li>
	    	@endforeach
	    </ul>
	    @if(Auth::check())
	    <hr>
	    <div class="card">
	    	<div class="card-block">
	    		<form method="POST" action="/posts/{{ $post->id }}/comments">
	    			{{ csrf_field() }}
	    			<div class="form-group">
	    				<textarea class="form-control" name="body" placeholder="Your comment goes here..."></textarea>
	    			</div>
	    			<div class="form-group">
	    				<button type="submit" class="btn btn-primary">Comment</button>
	    			</div>	
	    		</form>
	    	</div>
	    </div>
	    @endif

	    </div>
@endsection