@extends('layout.master')


@section('content')
        @foreach($posts as $post)
        	@include('layout.post')
        @endforeach
@endsection

@section('footer')

	<script type="text/javascript" src="/js/file.js"></script>

@endsection