/** @type {import('tailwindcss').Config} */
export default {
    content: ['./src/**/*.{html,js,svelte,ts}'],
    theme: {
        colors: {
            black: '#242424',
            white: '#ffffff',
            blue: '#0066cc',
            'blue-lighter': '#add6ff',
            'blue-light': '#e7f3ff',
            'blue-bright': '#0000ff',
            yellow: '#f0db4d',
            'yellow-light': '#fff6c3',
            indigo: '#151b8d',
            purple: '#700fe6',
        },
        extend: {
            gridTemplateColumns: {
                sidebar: '1fr 3fr',
            },
        },
    },
    plugins: [],
};
