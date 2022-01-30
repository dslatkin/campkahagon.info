module.exports = {
	content: [
		// https://tailwindcss.com/docs/content-configuration
		'./src/**/*.{html,js,ts,svelte}'
	],
	theme: {
		// https://tailwindcss.com/docs/customizing-colors#using-the-default-colors
		// "This can be helpful if you want to deliberately limit your color
		// palette and reduce the number of class names suggested by IntelliSense."
		colors: {
			black: '#000000',
			white: '#ffffff',
			blue: '#0066cc',
			'blue-light': '#e7f3ff',
			yellow: '#f0db4d',
			'yellow-light': '#fff6c3'
		},
		extend: {}
	},
	plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')]
};
