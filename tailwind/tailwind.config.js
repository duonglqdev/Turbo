// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;
const plugin = require('tailwindcss/plugin');

module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: [
		// Ensure changes to PHP files and `theme.json` trigger a rebuild.
		'./theme/**/*.php',
	],
	theme: {
		// Extend the default Tailwind theme.
		extend: {
			colors: {
				primary: '#111827',
				secondary: '#4b5563',
			},
			fontFamily: {
				body: ['SVN-Poppins', 'sans-serif'],
			},
			boxShadow: {
				base: '0px 2px 8px 0px rgba(17, 24, 39, 0.06)',
				custom: '0px 25px 40px 0px rgba(36, 44, 65, 0.102)',
			},
			gridTemplateColumns: {
				custom: '1fr 1fr 1fr 140px',
			},
		},
		container: {
			center: true,
			padding: '1rem',
			screens: {
				sm: '600px',
				md: '728px',
				lg: '984px',
				xl: '1240px',
				'2xl': '1460px',
			},
		},
	},
	corePlugins: {
		// Disable Preflight base styles in builds targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Add Tailwind Typography (via _tw fork).
		require('@_tw/typography'),

		// Extract colors and widths from `theme.json`.
		require('@_tw/themejson'),

		// Uncomment below to add additional first-party Tailwind plugins.
		// require('@tailwindcss/forms'),
		// require('@tailwindcss/aspect-ratio'),
		// require('@tailwindcss/container-queries'),
		plugin(function ({ addUtilities }) {
			addUtilities(
				{
					'.header-right': {
						alignItems: 'center',
						display: 'flex',
						gap: '12px',
						justifyContent: 'flex-end',
					},
					'.menu': {
						alignItems: 'start',
						display: 'flex',
						flexWrap: 'wrap',
						gap: '16px',
						justifyContent: 'flex-start',
						listStyle: 'none',
						margin: '0',
						padding: '0',
					},
					'.header-navigation-menu': {
						marginRight: '16px',
					},
					'.menu-item-has-children': {
						alignItems: 'center',
						display: 'flex',
						gap: '8px',
					},
				},
				['responsive', 'hover']
			);
		}),
	],
};
