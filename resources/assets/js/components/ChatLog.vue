<template>
	<div class="chat-log">
		<chat-message 
			v-for="(message, index) in messages" 
			:message="message"
			:key="`message-${index}`"></chat-message>
	</div>
</template>
	
<script>
	export default {
		props: ['messages']
	}
</script>