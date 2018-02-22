<template>
	<div>
		<p>{{ message.message }}</p>
		<small>{{ message.author }}</small>
	</div>
</template>
	
<script>
	export default {
		props: ['message']
	}
</script>