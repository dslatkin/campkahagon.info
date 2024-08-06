<script lang="ts">
    import { page } from '$app/stores';

    export let navItems: Array<{
        label: string;
        href: string;
        group?: string;
    }>;

    $: currentPath = $page.url.pathname;

    $: groups = [
        ...new Set(
            navItems.filter((item) => item.group).map((item) => item.group),
        ),
    ];

    $: navItemsNoGroup = navItems
        .filter((item) => !item.group)
        .map(({ label, href }) => ({
            label,
            href,
            isActive: currentPath == href || currentPath.startsWith(href + '/'),
        }));

    $: navItemsByGroup = groups.map((group) => ({
        group,
        items: navItems
            .filter((item) => item.group === group)
            .map(({ label, href }) => ({
                label,
                href,
                isActive:
                    currentPath == href || currentPath.startsWith(href + '/'),
            })),
    }));
</script>

<nav aria-label="Secondary" class="flex flex-col gap-8 pt-32">
    {#if navItemsNoGroup.length}
        <ul class="flex flex-col gap-2">
            {#each navItemsNoGroup as { label, href, isActive }}
                {#if isActive}
                    <li>{label}</li>
                {:else}
                    <li><a {href}>{label}</a></li>
                {/if}
            {/each}
        </ul>
    {/if}

    {#if navItemsByGroup.length}
        {#each navItemsByGroup as { group, items }}
            <div>
                <h2 class="pb-4 leading-tight">{group}</h2>
                <ul class="flex flex-col gap-2">
                    {#each items as { label, href, isActive }}
                        {#if isActive}
                            <li>{label}</li>
                        {:else}
                            <li><a {href}>{label}</a></li>
                        {/if}
                    {/each}
                </ul>
            </div>
        {/each}
    {/if}
</nav>
