<script lang="ts">
    import { onMount } from 'svelte';

    export let title: string;
    export let href: string;
    export let cover: string;

    // todo: Test these options
    // export let showHeader = true;
    // export let showFooter = true;
    // export let slideshow = false

    onMount(() => {
        const script = document.createElement('script');
        script.src = 'https://embedr.flickr.com/assets/client-code.js';
        script.async = true;
        document.body.appendChild(script);
        return () => {
            document.body.removeChild(script);
        };
    });
</script>

{#key href}
    <div class="flickr-album">
        <a data-flickr-embed="true" data-footer="true" {title} {href}>
            <img src={cover} width="700" height="525" alt={title} />
        </a>
    </div>
{/key}

<noscript>
    View the <a {href} {title}>album on Flickr</a>.
</noscript>

<style>
    .flickr-album :global(iframe) {
        /*
            Override the inline styles that flickr's embedder puts on the
            embedded iframe.
        */
        margin-left: auto !important;
        margin-right: auto !important;
    }
</style>
