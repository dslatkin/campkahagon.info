<script>
    import SideNav from '$lib/SideNav.svelte';
    import SideNavList from '$lib/SideNavList.svelte';
</script>

<SideNav>
    <SideNavList
        slot="sidebar"
        navItems={[
            {
                label: 'April 25, 2009 Photos',
                href: '/reunions/april-photos',
                group: 'Reunions',
            },
            {
                label: '2009 Reunion and Camp History Brochure',
                href: '/reunions/april-brochure',
                group: 'Reunions',
            },
            {
                label: '2009',
                href: '/reunions/2009',
                group: 'Kahagonites Now',
            },
        ]}
    />
    <svelte:fragment slot="main">
        <h1>Reunions</h1>
        <slot />
    </svelte:fragment>
</SideNav>
