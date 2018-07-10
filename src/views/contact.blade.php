<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Contact us</title>
</head>
<body>
	<h1>Contact us anytime</h1>
	<form action="{{url('contactsend')}}" method="POST">
		{{csrf_field()}}

		<input type="text" name="name" placeholder="Your Name Please"><br/>
		<input type="email" name="email" placeholder="Your Valid email"><br/>
		<textarea name="message" cols="30" rows="10" placeholder="Your query"></textarea><br/>
		<input type="submit" value="Submit">
		
	</form>
</body>
</html>