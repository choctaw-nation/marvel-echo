const defaultConfig = require( '@wordpress/scripts/config/webpack.config.js' );

/** The name of the theme. Alter me! */
const THEME_NAME = 'bootscore';

/** The location of your theme. */
const THEME_DIR = `/wp-content/themes/${ THEME_NAME }`;

/**
 * Array of strings modeled after folder names (e.g. 'about-choctaw'). Inside of these folders, an `index.ts` file is expected. If that's not what you want, consider editing the `addEntries` function below.
 *
 * **Be sure to import page scss in these files**
 */
const appNames = [];

/**
 * For SCSS files (no leading `_`)
 * Array of strings modeled after scss names (e.g. 'we-are-choctaw')
 */
const styleSheets = []; // for scss only

module.exports = {
	...defaultConfig,
	...{
		entry: function () {
			/** Custom entry points */
			const entries = {
				global: `.${ THEME_DIR }/src/index.js`,
				'vendors/bootstrap': `.${ THEME_DIR }/src/js/vendors/bootstrap.js`,
				'vendors/aos': `.${ THEME_DIR }/src/js/vendors/aos.js`,
			};
			return entries;
		},

		output: {
			path: __dirname + `${ THEME_DIR }/dist`,
			filename: `[name].js`,
		},
	},
};
