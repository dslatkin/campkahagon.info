<script lang="ts">
    import { page } from '$app/stores';

    const pagesStart = 1;
    const pagesEnd = 32;

    $: pageNum = parseInt($page.params.page);
    $: previousPageHref = $page.route.id?.replace(
        '[page]',
        (pageNum - 1).toString(),
    );
    $: nextPageHref = $page.route.id?.replace(
        '[page]',
        (pageNum + 1).toString(),
    );
</script>

<h2>April 2009 Reunion Brochure</h2>

{#if pageNum >= pagesStart && pageNum <= pagesEnd}
    <div class="page-select">
        {#if pageNum > pagesStart}
            <a
                href={previousPageHref}
                data-sveltekit-keepfocus
                data-sveltekit-noscroll
            >
                Previous
            </a>
        {/if}
        <p>Page {pageNum}</p>
        {#if pageNum < pagesEnd}
            <a
                href={nextPageHref}
                data-sveltekit-keepfocus
                data-sveltekit-noscroll
            >
                Next
            </a>
        {/if}
    </div>
    <img src="/reunions/april-brochure/page{pageNum}.jpg" alt="" />
{:else}
    <p>Page not found</p>
{/if}
