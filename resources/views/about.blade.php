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
		<li> {{$todo->body}}</li>
		@endforeach
	</ul>
</h4>	
</body>
</html>