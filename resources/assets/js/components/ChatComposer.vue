<template>
	<div class="chat-composer">
		<input type="text" 
			placeholder="Say something..." 
			v-model="newMessage"
			@keydown.enter="sendMessage">
		<button class="btn btn-primary" @click="sendMessage">Send</button>
	</div>
</template>
	
<script>
	export default {
		data() {
			return {
				newMessage: ''
			}
		},

		methods: {
			sendMessage() {
				this.$emit('messagesent', { 
					message: this.newMessage,
					author: 'John Doe'
				});

				this.newMessage = '';
			}
		}
	}
</script>

<style lang="css">
	.chat-composer {
		display: flex;
	}

	.chat-composer input {
		flex: 1 auto;
	}

	.chat-composer button {
		border-radius: 0;
	}
</style>