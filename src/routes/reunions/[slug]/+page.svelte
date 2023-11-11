<script lang="ts">
    import { page } from '$app/stores';
    import FlickrEmbed from '$lib/FlickrEmbed.svelte';

    $: slug = $page.params.slug;
</script>

{#if slug == 'april-photos'}
    <h2>April 25, 2009 Photos</h2>
    <FlickrEmbed
        href="https://www.flickr.com/photos/127089176@N03/albums/72157646301088057"
        title="April 25, 2009 Photos"
        cover="https://live.staticflickr.com/5583/14972319226_eac6bab4b2_q.jpg"
    />
{/if}

{#if slug == '2009'}
    <h2>Kahagonites Now - In 2009</h2>
    <p>
        <a href="/reunions/2009/StuartShanaHarrow.jpg" target="_blank">
            See Stuart (Simcha) and Shana Harrow
        </a>
    </p>
{/if}

{#if slug == '2013'}
    <h2>Kahagonites Now - In 2013</h2>
    <p>We are still waiting for some new pictures!</p>
{/if}

{#if slug == '2014'}
    <h2>Kahagonites Now - In 2014</h2>
    <p>We are still waiting for some new pictures!</p>
{/if}

{#if slug == '2015'}
    <h2>Kahagonites Now - In 2015</h2>
    <p>We are still waiting for some new pictures!</p>
{/if}
