<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chat Room</title>

	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	<div class="container" id="app">
		<h1>Chatroom</h1>
		
		<chat-log :messages="messages"></chat-log>
		<chat-composer @messageSent="addMessage"></chat-composer>
	</div>
	
	
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>