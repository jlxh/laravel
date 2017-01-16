<template>
	<div class="example">
		<h1>{{ message }}</h1>
		<p>You've initialized a new project with jlxh-laravel framework.</p>
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
		height: 100%;
	}
</style>
