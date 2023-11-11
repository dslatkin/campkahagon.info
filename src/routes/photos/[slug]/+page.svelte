<script lang="ts">
    import { page } from '$app/stores';
    import FlickrEmbed from '$lib/FlickrEmbed.svelte';

    $: slug = $page.params.slug;

    const albums: {
        slug: string;
        title: string;
        href: string;
        cover: string;
    }[] = [
        {
            slug: 'saryl',
            title: "Saryl's photos 1962-66",
            href: 'https://www.flickr.com/photos/28156252@N05/albums/72157606300675380',
            cover: 'https://live.staticflickr.com/3274/2689373007_ac585b5461_q.jpg',
        },

        {
            slug: 'yvonne',
            title: 'Yvonne "Evie" Rosenstein\'s photos',
            href: 'https://www.flickr.com/photos/28156252@N05/albums/72157606975076827',
            cover: 'https://live.staticflickr.com/3282/2801012375_bddce2789e_q.jpg',
        },

        {
            slug: 'andy',
            title: "Andy Sachs's photos 1961-62",
            href: 'https://www.flickr.com/photos/28156252@N05/albums/72157607377850124',
            cover: 'https://live.staticflickr.com/3293/2870449699_863efc182f_q.jpg',
        },

        {
            slug: 'diane',
            title: "Diane Fellows Zimmer's Photos",
            href: 'https://www.flickr.com/photos/127089176@N03/albums/72157646303678368',
            cover: 'https://live.staticflickr.com/3896/14995572455_3b6339daa8_q.jpg',
        },

        {
            slug: 'marty',
            title: "Marty Bachrach's Photos",
            href: 'https://www.flickr.com/photos/127089176@N03/albums/72157646303465969',
            cover: 'https://live.staticflickr.com/3923/14995225392_1039075308_q.jpg',
        },

        {
            slug: 'stuart',
            title: "Stuart Harrow's Photos",
            href: 'https://www.flickr.com/photos/127089176@N03/albums/72157646302089037',
            cover: 'https://live.staticflickr.com/5578/14995596545_6601de2bc8_q.jpg',
        },

        {
            slug: 'unknown',
            title: 'Who Are They - To Be Identified',
            href: 'https://www.flickr.com/photos/127089176@N03/albums/72157646302162197',
            cover: 'https://live.staticflickr.com/3895/14809096397_2e3c30cbb0_q.jpg',
        },
    ];

    let activeAlbum: (typeof albums)[number] | undefined;
    $: {
        activeAlbum = slug ? albums.find((a) => a.slug === slug) : undefined;
    }
</script>

{#if activeAlbum}
    <h2>{activeAlbum.title}</h2>

    {@const { title, href, cover } = activeAlbum}
    <FlickrEmbed {title} {href} {cover} />
{:else}
    <p>Album not found.</p>
{/if}
