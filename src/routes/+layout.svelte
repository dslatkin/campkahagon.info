<script lang="ts">
    import '../app.css';

    const navItems: Array<{
        label: string;
        href: string;
        active: boolean;
    }> = [
        { label: 'Home', href: '/', active: true },
        { label: 'Photos', href: '/photos', active: false },
        { label: 'Memories', href: '/memories', active: false },
        { label: 'Songs', href: '/songs', active: false },
        { label: 'Reunions/Present Time', href: '/reunions', active: false },
        { label: 'Announcements', href: '/announcements', active: false },
        { label: 'More Info', href: '/more-info', active: false },
    ];
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
        <nav class="bg-gradient-to-b from-blue to-blue-light">
            <ul class="sm:flex sm:flex-wrap">
                {#each navItems as { label, href, active }}
                    <li class="flex-auto">
                        <a
                            {href}
                            class="block h-full py-3 text-center font-bold no-underline {active
                                ? 'text-black bg-blue-light'
                                : 'text-white hover:bg-gradient-to-b hover:text-black hover:from-yellow-light hover:to-yellow'}"
                        >
                            {label}
                        </a>
                    </li>
                {/each}
            </ul>
        </nav>
    </div>

    <main
        class="border-8 border-blue bg-blue-light bg-[url('/img/topleft-background.png'),url('/img/midright-background.jpg')] bg-[length:128px,300px] bg-[position:top,bottom] bg-no-repeat pb-[28rem] pt-36"
    >
        <div class="border-x-[1px] border-blue p-3 md:mx-[6rem] lg:mx-[8rem]">
            <slot />
        </div>
    </main>
</div>
