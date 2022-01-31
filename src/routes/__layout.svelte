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

<div class="lg:max-w-screen-lg grid grid-cols-1 gap-3 mx-auto">
    <div class="border-blue border-8">
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
                            class="block h-full  py-3 text-center text-white font-bold {active
                                ? 'text-black bg-blue-light'
                                : 'hover:bg-gradient-to-b hover:from-yellow-light hover:to-yellow'}"
                        >
                            {label}
                        </a>
                    </li>
                {/each}
            </ul>
        </nav>
    </div>

    <main
        class="border-blue border-8 pt-36 pb-[28rem] bg-blue-light bg-[url('/img/topleft-background.png'),url('/img/midright-background.jpg')] bg-[length:128px,300px] bg-[position:top,bottom] bg-no-repeat"
    >
        <div class="md:mx-[6rem] lg:mx-[8rem] border-blue border-x-[1px] p-3">
            <slot />
        </div>
    </main>
</div>
