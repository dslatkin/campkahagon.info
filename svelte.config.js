import adapter from '@sveltejs/adapter-static';
import { vitePreprocess } from '@sveltejs/kit/vite';

/** @type {import('@sveltejs/kit').Config} */
const config = {
    // Enable preprocessing <style lang="postcss"> for Tailwind generations
    preprocess: vitePreprocess(),

    kit: {
        adapter: adapter(),
    },
};

export default config;
