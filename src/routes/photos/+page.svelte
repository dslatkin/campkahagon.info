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
        id: string;
        title: string;
        href: string;
        cover: string;
        contributor: string;
        collection: (typeof collections)[number]['key'];
    }[] = [
        {
            id: 'saryl',
            title: "Saryl's photos 1962-66",
            href: 'https://www.flickr.com/photos/28156252@N05/albums/72157606300675380',
            cover: 'https://live.staticflickr.com/3274/2689373007_ac585b5461_q.jpg',
            contributor: 'Saryl Radwin',
            collection: 'old',
        },
        {
            id: 'yvonne',
            title: 'Yvonne "Evie" Rosenstein\'s photos',
            href: 'https://www.flickr.com/photos/28156252@N05/albums/72157606975076827',
            cover: 'https://live.staticflickr.com/3282/2801012375_bddce2789e_q.jpg',
            contributor: 'Yvonne Rosenstein',
            collection: 'old',
        },
        {
            id: 'Andy',
            title: "Andy Sachs's photos 1961-62",
            href: 'https://www.flickr.com/photos/28156252@N05/albums/72157607377850124',
            cover: 'https://live.staticflickr.com/3293/2870449699_863efc182f_q.jpg',
            contributor: 'Andy Sachs',
            collection: 'old',
        },
        {
            id: 'diane',
            title: "Diane Fellows Zimmer's Photos",
            href: 'https://www.flickr.com/photos/127089176@N03/albums/72157646303678368',
            cover: 'https://live.staticflickr.com/3896/14995572455_3b6339daa8_q.jpg',
            contributor: 'Diane Fellows Zimmer',
            collection: 'new',
        },
        {
            id: 'marty',
            title: "Marty Bachrach's Photos",
            href: 'https://www.flickr.com/photos/127089176@N03/albums/72157646303465969',
            cover: 'https://live.staticflickr.com/3923/14995225392_1039075308_q.jpg',
            contributor: 'Marty Bachrach',
            collection: 'new',
        },
        {
            id: 'stuart',
            title: "Stuart Harrow's Photos",
            href: 'https://www.flickr.com/photos/127089176@N03/albums/72157646302089037',
            cover: 'https://live.staticflickr.com/5578/14995596545_6601de2bc8_q.jpg',
            contributor: 'Stuart Harrow',
            collection: 'new',
        },
        {
            id: 'unknown',
            title: 'Who Are They - To Be Identified',
            href: 'https://www.flickr.com/photos/127089176@N03/albums/72157646302162197',
            cover: 'https://live.staticflickr.com/3895/14809096397_2e3c30cbb0_q.jpg',
            contributor: 'Unknown',
            collection: 'new',
        },
    ];

    let activeAlbum: (typeof albums)[number] | undefined;
    $: {
        const activeAlbumId = $page.url.searchParams.get('album');
        activeAlbum = activeAlbumId
            ? albums.find((a) => a.id === activeAlbumId)
            : undefined;
    }
</script>

<p class="text-center">
    For photo information, click picture. For full screen, click the
    bottom-right icon.
</p>

{#each collections as { label, key }}
    {@const albumsInCollection = albums.filter((a) => a.collection === key)}
    <p class="text-center">
        {#each albumsInCollection as { id, contributor }, idx}
            {@const active = id == activeAlbum?.id}
            {#if idx > 0}&nbsp;|&nbsp;{/if}
            {#if active}
                {contributor}
            {:else}
                <!--
                    Flickr's embed script requires a full page reload when
                    clicking links to be functional with the way its listeners
                    are set up.
                -->
                <a href="?album={id}" data-sveltekit-reload>{contributor}</a>
            {/if}
        {/each}
    </p>
{/each}

{#if activeAlbum}
    {@const { title, href, cover } = activeAlbum}
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
