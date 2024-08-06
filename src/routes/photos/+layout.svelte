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
            },
            {
                href: '/photos/yvonne',
                label: 'Yvonne Rosenstein',
            },
            {
                href: '/photos/andy',
                label: 'Andy Sachs',
            },
            {
                href: '/photos/diane',
                label: 'Diane Fellows Zimmer',
            },
            {
                href: '/photos/marty',
                label: 'Marty Bachrach',
            },
            {
                href: '/photos/stuart',
                label: 'Stuart Harrow',
            },
            {
                href: '/photos/unknown',
                label: 'Unknown',
            },
        ]}
    />
    <svelte:fragment slot="main">
        <h1>Photographs</h1>
        <slot />
    </svelte:fragment>
</SideNav>
