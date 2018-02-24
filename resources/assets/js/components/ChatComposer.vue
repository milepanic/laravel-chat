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
		props: ['user', 'reciever'],

		data() {
			return {
				newMessage: ''
			}
		},

		methods: {
			sendMessage() {
				this.$emit('messagesent', { 
					body: this.newMessage,
					user: {
						name: this.user.name
					},
					reciever: this.reciever
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