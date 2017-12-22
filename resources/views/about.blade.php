<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>Hi <?= $name ?></h2>
<h4>
	<ul>
		@foreach($todos as $todo)
		<li> <a href="/about/{{$todo->id}}">{{$todo->body}}</a></li>
		@endforeach
	</ul>
</h4>	
</body>
</html>