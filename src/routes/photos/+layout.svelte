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
                group: 'From',
            },
            {
                href: '/photos/yvonne',
                label: 'Yvonne Rosenstein',
                group: 'From',
            },
            {
                href: '/photos/andy',
                label: 'Andy Sachs',
                group: 'From',
            },
            {
                href: '/photos/diane',
                label: 'Diane Fellows Zimmer',
                group: 'From',
            },
            {
                href: '/photos/marty',
                label: 'Marty Bachrach',
                group: 'From',
            },
            {
                href: '/photos/stuart',
                label: 'Stuart Harrow',
                group: 'From',
            },
            {
                href: '/photos/unknown',
                label: 'Unknown',
                group: 'From',
            },
        ]}
    />
    <svelte:fragment slot="main">
        <h1>Photographs</h1>
        <slot />
    </svelte:fragment>
</SideNav>
