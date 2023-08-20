<script lang="ts">
    import { page } from '$app/stores';
    import '../app.css';

    const navItems: Array<{
        label: string;
        href: string;
    }> = [
        { label: 'Home', href: '/' },
        { label: 'Photos', href: '/photos' },
        { label: 'Memories', href: '/memories' },
        { label: 'Songs', href: '/songs' },
        { label: 'Reunions/Present Time', href: '/reunions' },
        { label: 'Announcements', href: '/announcements' },
        { label: 'More Info', href: '/more-info' },
    ];

    $: currentPath = $page.url.pathname;
</script>

<div class="mx-auto grid grid-cols-1 gap-3 lg:max-w-screen-lg">
    <div class="border-8 border-blue">
        <header>
            <h1>
                <img
                    src="/img/header.jpg"
                    alt="Camp Kahagon - You will be, our fondest memory..."
                    class="w-full"
                />
            </h1>
        </header>
        <nav
            class="bg-gradient-to-b from-blue to-blue-light"
            aria-label="Main navigation"
        >
            <ul class="sm:flex sm:flex-wrap">
                {#each navItems as { label, href }}
                    {@const active = href == currentPath}
                    <li class="flex-auto text-center font-bold">
                        {#if active}
                            <div class="h-full bg-blue-light py-3 text-black">
                                {label}
                            </div>
                        {:else}
                            <a
                                {href}
                                class="block h-full py-3 text-white no-underline hover:bg-gradient-to-b hover:from-yellow-light hover:to-yellow hover:text-black"
                            >
                                {label}
                            </a>
                        {/if}
                    </li>
                {/each}
            </ul>
        </nav>
    </div>

    <main
        class="border-8 border-blue bg-blue-light bg-[url('/img/topleft-background.png'),url('/img/midright-background.jpg')] bg-[length:128px,300px] bg-[position:top,bottom] bg-no-repeat pb-[30rem] pt-36"
    >
        <div class="border-x-[1px] border-blue p-3 md:mx-[6rem] lg:mx-[8rem]">
            <slot />
        </div>
    </main>
</div>
