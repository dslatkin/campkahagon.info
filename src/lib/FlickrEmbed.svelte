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
        /*
        Sample embed code from flickr with header, footer, slideshow turned on.
        
        -   Slide-show is enabled from `data-context`
        -   I'm not sure if width, height is given dynamically based on the
            photo dimensions (I would guess yes)
        -   Script tags are replaced to not confuse the Svelte compiler by
            having them in a comment.

        <a data-flickr-embed="true" data-header="true" data-footer="true"
            data-context="true"
            href="https://www.flickr.com/photos/28156252@N05/2801012285/in/album-72157606975076827/"
            title="Yvonne camp pix 7"
        >
            <img
                src="https://live.staticflickr.com/3250/2801012285_4acdcc959c_b.jpg"
                width="1023"
                height="674"
                alt="Yvonne camp pix 7"
            />
        </a>
        <SCRIPT-START>
            async
            src="//embedr.flickr.com/assets/client-code.js"
            charset="utf-8"
        </SCRIPT-END>
        */
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
