<script lang="ts">
    import { page } from '$app/stores';

    export let navItems: Array<{
        label: string;
        href: string;
        group?: string;
    }>;

    $: groups = [
        ...new Set(
            navItems.filter((item) => item.group).map((item) => item.group),
        ),
    ];

    $: navItemsNoGroup = navItems
        .filter((item) => !item.group)
        .map(({ label, href }) => ({ label, href }));

    $: navItemsByGroup = groups.map((group) => ({
        group,
        items: navItems.filter((item) => item.group === group),
    }));

    $: currentPath = $page.url.pathname;
</script>

<nav aria-label="Secondary">
    {#if navItemsNoGroup.length}
        <ul>
            {#each navItemsNoGroup as { label, href }}
                {@const active = href == currentPath}
                {#if active}
                    <li>{label}</li>
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
                {#each items as { label, href }}
                    {#if href == currentPath}
                        <li>{label}</li>
                    {:else}
                        <li><a {href}>{label}</a></li>
                    {/if}
                {/each}
            </ul>
        {/each}
    {/if}
</nav>
