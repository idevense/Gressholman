'use strict';

module.exports = {
	theme: {
		slug: 'Gressholman',
		name: 'Gressholman',
		author: 'Idar Evensen'
	},
	dev: {
		browserSync: {
			live: true,
			proxyURL: 'http://localhost',
			bypassPort: '8080'
		},
		browserslist: [ // See https://github.com/browserslist/browserslist
			'> 1%',
			'last 2 versions'
		],
		debug: {
			styles: false, // Render verbose CSS for debugging.
			scripts: false // Render verbose JS for debugging.
		}
	},
	export: {
		compress: true
	}
};
