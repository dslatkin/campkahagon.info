<script>
    import SideNav from '$lib/SideNav.svelte';
    import SideNavList from '$lib/SideNavList.svelte';
</script>

<SideNav>
    <SideNavList
        slot="sidebar"
        navItems={[
            {
                label: 'Reunions',
                href: '/announcements/reunions',
            },
            {
                label: 'General',
                href: '/announcements/general',
            },
            {
                label: 'Where Are They Now?',
                href: '/announcements/where-are-they-now',
            },
            {
                label: 'In Memoriam',
                href: '/announcements/in-memoriam',
            },
        ]}
    />
    <svelte:fragment slot="main">
        <h1>Announcements</h1>
        <slot />
    </svelte:fragment>
</SideNav>
