<script lang="ts">
	import Header from '$lib/Header.svelte';
	import '../app.css';
</script>

<Header />

<nav>
	<h2>Nav</h2>
	<ul>
		<li><a href="/">Home</a></li>
		<li><a href="/about">About</a></li>
	</ul>
</nav>

<main>
	<slot />
</main>

<footer>
	<p>visit <a href="https://kit.svelte.dev">kit.svelte.dev</a> to learn SvelteKit</p>
</footer>
