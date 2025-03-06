const defaultConfig = require( '@wordpress/scripts/config/webpack.config.js' );

/** The name of the theme. Alter me! */
const THEME_NAME = 'echo';

/** The location of your theme. */
const THEME_DIR = `/wp-content/themes/${ THEME_NAME }`;



module.exports = {
	...defaultConfig,
	...{
		entry: function () {
			/** Custom entry points */
			const entries = {
				global: `.${ THEME_DIR }/src/index.js`,
			};
			return entries;
		},

		output: {
			path: __dirname + `${ THEME_DIR }/dist`,
			filename: `[name].js`,
		},
	},
};
