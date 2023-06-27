<script>
    import { page } from "$app/stores";

    $: albumId = $page.url.searchParams.get('album');
</script>

<p>Current albumId is {albumId}</p>

<p class="text-center">
    For photo information, click picture. For full screen, click the bottom-right
    icon.
</p>

<p class="text-center">
    Old Photo Collections:
    <a href="?album=1">Saryl Radwin</a>
    | <a href="?album=2">Yvonne Rosenstein</a>
    | <a href="?album=3">Andy Sachs</a>
</p>


<p class="text-center">
    New Photo Collections:
    <a href="?album=4">Diane Fellows Zimmer</a>
    | <a href="?album=5">Marty Bachrach</a>
    | <a href="?album=6">Stuart Harrow</a>
    | <a href="?album=7">Unknown</a>
</p>

{#if !albumId}
    <p class="text-center font-bold">Select an album to continue.</p>
{/if}
