<template>
	<div class="example">
		<p>{{ message }}</p>
		<p>You've init a new Project with jlxh-laravel framework.</p>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				message: "Hello World"
			}
		}
	}
</script>

<style>
	.example {
		display: flex;
		align-items: center;
		justify-content: center;
		flex-direction: column;
	}
</style>
