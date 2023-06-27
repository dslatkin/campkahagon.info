import { mdsvex } from 'mdsvex';
import adapter from '@sveltejs/adapter-static';
import { vitePreprocess } from '@sveltejs/kit/vite';

/** @type {import('@sveltejs/kit').Config} */
const config = {
    extensions: ['.svelte'],

    preprocess: [vitePreprocess()],

    kit: {
        adapter: adapter(),
    },
};

export default config;
