<template>
	<div class="users-avaiable">
		<ul>
			<li v-for="user in users">
				<a :href="'chat/' + user.id">{{ user.name }}</a>
			</li>
		</ul>
	</div>
</template>
	
<script>
	export default {
		// props: ['users']
		data() {
			return {
				users: []
			}
		},

		created() {
			axios.get('/users')
				.then(response => this.users = response.data);
		}
	}
</script>