<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>List of all tasks</h1>
	<ul>
	@foreach ($tasks as $task)
		<li><a href="/tasks/{{ $task->id }}">{{ $task->body }}</a></li>
	@endforeach
	</ul>
</body>
</html>