<script>
    import SideNav from '$lib/SideNav.svelte';
    import SideNavList from '$lib/SideNavList.svelte';
</script>

<SideNav>
    <SideNavList
        slot="sidebar"
        navItems={[
            {
                label: 'Official "Alma Mater"',
                href: '/songs/alma-mater',
                group: 'Recollections',
            },
            {
                label: 'Official "Parting Song"',
                href: '/songs/parting-song',
                group: 'Recollections',
            },
            {
                label: '1962',
                href: '/songs/color-war-1962',
                group: 'Color War Songs',
            },
            {
                label: '1963',
                href: '/songs/color-war-1963',
                group: 'Color War Songs',
            },
            {
                label: '1964',
                href: '/songs/color-war-1964',
                group: 'Color War Songs',
            },
            {
                label: '1965',
                href: '/songs/color-war-1965',
                group: 'Color War Songs',
            },
            {
                label: '1966',
                href: '/songs/color-war-1966',
                group: 'Color War Songs',
            },
            {
                label: 'Unidentified Color War Songs',
                href: '/songs/color-war-unidentified',
                group: 'General Songs',
            },
            {
                label: 'Lodge Girls Songs',
                href: '/songs/lodge-girls',
                group: 'General Songs',
            },
            {
                label: 'General "Dining Room" Songs & Ditties',
                href: '/songs/dining-room',
                group: 'General Songs',
            },
            {
                label: 'Waiters Songs',
                href: '/songs/waiters',
                group: 'General Songs',
            },
            {
                label: 'Tribal War 1966',
                href: '/songs/tribal-war-1966',
                group: 'General Songs',
            },
        ]}
    />
    <svelte:fragment slot="main">
        <h1>Songs</h1>
        <slot />
    </svelte:fragment>
</SideNav>
