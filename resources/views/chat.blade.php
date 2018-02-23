@extends('layouts.app')

@section('content')
	<div class="container" id="root">
		<h1>Chatroom</h1>
		<small>Online users: @{{ onlineUsers.length }}</small>
		
		<chat-log :messages="messages"></chat-log>
		<chat-composer @messageSent="addMessage"></chat-composer>
	</div>
	
	
	<script src="{{ asset('js/app.js') }}"></script>
@endsection
