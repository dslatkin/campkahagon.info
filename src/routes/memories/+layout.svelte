<script>
    import SideNav from '$lib/SideNav.svelte';
    import SideNavList from '$lib/SideNavList.svelte';
</script>

<SideNav>
    <SideNavList
        slot="sidebar"
        navItems={[
            {
                label: '1961',
                href: '/memories/1961',
                group: "Different Camper's Recollections",
            },
            {
                label: '1962',
                href: '/memories/1962',
                group: "Different Camper's Recollections",
            },
            {
                label: '1963',
                href: '/memories/1963',
                group: "Different Camper's Recollections",
            },
            {
                label: '1964',
                href: '/memories/1964',
                group: "Different Camper's Recollections",
            },
            {
                label: '1965',
                href: '/memories/1965',
                group: "Different Camper's Recollections",
            },
            {
                label: '1966',
                href: '/memories/1966',
                group: "Different Camper's Recollections",
            },
            {
                label: '"FAMILY" CAMPERS',
                href: '/memories/family-campers',
                group: "Different Camper's Recollections",
            },
            {
                label: 'Bucks County, Quakertown and camp area map',
                href: '/memories/buck',
                group: "Different Camper's Recollections",
            },
            {
                label: "Saryl and Marty's memory of camp layout",
                href: '/memories/camp-map',
                group: "Different Camper's Recollections",
            },
        ]}
    />
    <svelte:fragment slot="main">
        <h1>Memories</h1>
        <slot />
    </svelte:fragment>
</SideNav>
