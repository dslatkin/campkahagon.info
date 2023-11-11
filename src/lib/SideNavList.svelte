<script lang="ts">
    import { page } from '$app/stores';

    export let navItems: Array<{
        label: string;
        href: string;
        group?: string;
        reload?: boolean;
    }>;

    $: groups = [
        ...new Set(
            navItems.filter((item) => item.group).map((item) => item.group),
        ),
    ];

    $: navItemsNoGroup = navItems
        .filter((item) => !item.group)
        .map(({ label, href, reload }) => ({ label, href, reload }));

    $: navItemsByGroup = groups.map((group) => ({
        group,
        items: navItems.filter((item) => item.group === group),
    }));

    $: currentPath = $page.url.pathname;
</script>

<nav aria-label="Secondary">
    {#if navItemsNoGroup.length}
        <ul>
            {#each navItemsNoGroup as { label, href, reload }}
                {@const active = href == currentPath}
                {#if active}
                    <li>{label}</li>
                {:else if reload}
                    <li><a {href} data-sveltekit-reload>{label}</a></li>
                {:else}
                    <li><a {href}>{label}</a></li>
                {/if}
            {/each}
        </ul>
    {/if}

    {#if navItemsByGroup.length}
        {#each navItemsByGroup as { group, items }}
            <h2>{group}</h2>
            <ul>
                {#each items as { label, href, reload }}
                    {#if href == currentPath}
                        <li>{label}</li>
                    {:else if reload}
                        <li><a {href} data-sveltekit-reload>{label}</a></li>
                    {:else}
                        <li><a {href}>{label}</a></li>
                    {/if}
                {/each}
            </ul>
        {/each}
    {/if}
</nav>
