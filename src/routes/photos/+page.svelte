<script lang="ts">
    import { page } from '$app/stores';

    const collections = [
        {
            label: 'Old Photos Collections',
            key: 'old',
        },
        {
            label: 'New Photos Collections',
            key: 'new',
        },
    ] as const;

    const albums: {
        title: string;
        href: string;
        cover: string;
        contributor: string;
        collection: (typeof collections)[number]['key'];
    }[] = [
        {
            title: "Saryl's photos 1962-66",
            href: 'https://www.flickr.com/photos/28156252@N05/albums/72157606300675380',
            cover: 'https://live.staticflickr.com/3274/2689373007_ac585b5461_q.jpg',
            contributor: 'Saryl Radwin',
            collection: 'old',
        },
        {
            title: 'Yvonne "Evie" Rosenstein\'s photos',
            href: 'https://www.flickr.com/photos/28156252@N05/albums/72157606975076827',
            cover: 'https://live.staticflickr.com/3282/2801012375_bddce2789e_q.jpg',
            contributor: 'Yvonne Rosenstein',
            collection: 'old',
        },
        {
            title: "Andy Sachs's photos 1961-62",
            href: 'https://www.flickr.com/photos/28156252@N05/albums/72157607377850124',
            cover: 'https://live.staticflickr.com/3293/2870449699_863efc182f_q.jpg',
            contributor: 'Andy Sachs',
            collection: 'old',
        },
        {
            title: "Diane Fellows Zimmer's Photos",
            href: 'https://www.flickr.com/photos/127089176@N03/albums/72157646303678368',
            cover: 'https://live.staticflickr.com/3896/14995572455_3b6339daa8_q.jpg',
            contributor: 'Diane Fellows Zimmer',
            collection: 'new',
        },
        {
            title: "Marty Bachrach's Photos",
            href: 'https://www.flickr.com/photos/127089176@N03/albums/72157646303465969',
            cover: 'https://live.staticflickr.com/3923/14995225392_1039075308_q.jpg',
            contributor: 'Marty Bachrach',
            collection: 'new',
        },
        {
            title: "Stuart Harrow's Photos",
            href: 'https://www.flickr.com/photos/127089176@N03/albums/72157646302089037',
            cover: 'https://live.staticflickr.com/5578/14995596545_6601de2bc8_q.jpg',
            contributor: 'Stuart Harrow',
            collection: 'new',
        },
        {
            title: 'Who Are They - To Be Identified',
            href: 'https://www.flickr.com/photos/127089176@N03/albums/72157646302162197',
            cover: 'https://live.staticflickr.com/3895/14809096397_2e3c30cbb0_q.jpg',
            contributor: 'Unknown',
            collection: 'new',
        },
    ];

    $: albumId = $page.url.searchParams.get('album');
</script>

<p>Current albumId is {albumId}</p>

<p class="text-center">
    For photo information, click picture. For full screen, click the
    bottom-right icon.
</p>

{#each collections as { label, key }}
    {@const albumsInCollection = albums.filter((a) => a.collection === key)}
    <p class="text-center">
        {label}:
        {#each albumsInCollection as { contributor }, idx}
            {#if idx > 0}&nbsp;|&nbsp;{/if}
            <a href="?album={idx + 1}" data-sveltekit-reload>{contributor}</a>
        {/each}
    </p>
{/each}

{#if albumId}
    {@const { title, href, cover } = albums[parseInt(albumId) - 1]}
    <div class="flickr-album">
        <a data-flickr-embed="true" data-footer="true" {title} {href}>
            <img src={cover} width="700" height="525" alt={title} />
        </a>
    </div>

    <script
        async
        src="//embedr.flickr.com/assets/client-code.js"
        charset="utf-8"
    >
        JavaScript must be enabled to view this content.
    </script>
{:else}
    <p class="text-center font-bold">Select an album to continue.</p>
{/if}

<style>
    .flickr-album :global(iframe) {
        /*
            We need !important here to override the inline styles that flickr's
            embedder puts on the embedded iframe.
        */
        margin-left: auto !important;
        margin-right: auto !important;
    }
</style>
