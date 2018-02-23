<template>
	<div class="chat-log">
		<chat-message 
			v-for="(message, index) in messages" 
			:message="message"
			:key="`message-${index}`"></chat-message>
		<div class="empty" v-show="messages.length === 0">
			Start a conversation
		</div>
	</div>
</template>
	
<script>
	export default {
		props: ['messages']
	}
</script>