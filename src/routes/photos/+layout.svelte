<script>
    import SideNav from '$lib/SideNav.svelte';
    import SideNavList from '$lib/SideNavList.svelte';
</script>

<SideNav>
    <SideNavList
        slot="sidebar"
        navItems={[
            {
                href: '/photos/saryl',
                label: 'Saryl Radwin',
                group: 'Old Collection',
            },
            {
                href: '/photos/yvonne',
                label: 'Yvonne Rosenstein',
                group: 'Old Collection',
            },
            {
                href: '/photos/andy',
                label: 'Andy Sachs',
                group: 'Old Collection',
            },
            {
                href: '/photos/diane',
                label: 'Diane Fellows Zimmer',
                group: 'New Collection',
            },
            {
                href: '/photos/marty',
                label: 'Marty Bachrach',
                group: 'New Collection',
            },
            {
                href: '/photos/stuart',
                label: 'Stuart Harrow',
                group: 'New Collection',
            },
            {
                href: '/photos/unknown',
                label: 'Unknown',
                group: 'New Collection',
            },
        ]}
    />
    <svelte:fragment slot="main">
        <h1>Photographs</h1>
        <slot />
    </svelte:fragment>
</SideNav>
