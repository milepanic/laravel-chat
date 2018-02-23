<template>
	<div>
		<p>{{ message.body }}</p>
		<small>{{ message.user.name }}</small>
	</div>
</template>
	
<script>
	export default {
		props: ['message']
	}
</script>