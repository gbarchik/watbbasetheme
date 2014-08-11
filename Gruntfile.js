'use strict';
module.exports = function(grunt) {
	
	// Load all Grunt Tasks
	require('load-grunt-tasks')(grunt);
	
	grunt.initConfig({
		
		// Watch
		watch: {
			sass: {
				files: ['assets/styles/**/*.{scss,sass}'],
				tasks: ['sass', 'autoprefixer', 'cssmin']
			},
			js: {
				files: '<%= jshint.all %>',
				tasks: ['jshint', 'uglify']
			},
			images: {
				files: ['assets/images/**/*.{png,jpg,gif}'],
				tasks: ['imagemin']
			},
			livereload: {
				options: { livereload: true },
				files: ['style.css', 'assets/js/*.js', 'assets/images/**/*.{png,jpg,jpeg,gif,webp,svg}']
			}
		},
		
		// Sass
		sass: {
			dist: {
				options: {
					sourcemap: true,
					style: 'expanded'
				},
				files: {
					'assets/styles/build/style.css': 'assets/styles/style.scss',
					//'assets/styles/build/editor-style.css': 'assets/styles/editor-styles.scss'
				}
			}
		},
		
		// Autoprefixer
		autoprefixer: {
			options: {
				browsers: ['last 2 versions', 'ie 9', 'ios 6', 'android 4'],
				map: true
			},
			files: {
				expand: true,
				flatten: true,
				src: 'assets/styles/build/*.css',
				dest: 'assets/styles/build'
			}
		},

		// CSS Min
		cssmin: {
			options: {
				keepSpecialComments: 1
			},
			minify: {
				expand: true,
				cwd: 'assets/styles/build',
				src: ['*.css', '!*.min.css'],
				ext: '.css'
			}
		},
		
		// JS Linting
		jshint: {
			options: {
				jshintrc: '.jshintrc',
				"force": true
			},
			all: [
				'Gruntfile.js',
				'assets/js/source/**/*.js'
			]
		},
		
		// Uglify
		uglify: {
			plugins: {
				options: {
					sourceMap: 'assets/js/plugins.js.map',
					sourceMappingURL: 'plugins.js.map',
					sourceMapPrefix: 2
				},
				files: {
					'assets/js/plugins.min.js': [
						'assets/js/source/plugins.js',
						//'assets/js/vendor/pluginname/pluginnanme.js'
					]
				}
			},
			main: {
				options: {
					sourceMap: 'assets/js/main.js.map',
					sourceMappingURL: 'main.js.map',
					sourceMapPrefix: 2
				},
				files: {
					'assets/js/main.min.js': [
						'assets/js/source/main.js'
					]
				}
			}
		},
		
		// Image Optimization
		imagemin: {
			dist: {
				options: {
					optimizationLevel: 7,
					progressive: true,
					interlaced: true
				},
				files: [{
					expand: true,
					cwd: 'assets/images/',
					src: ['**/*.{png,jpg,gif'],
					dest: 'assets/images/'
				}]
			}
		}
		
	});
	
	grunt.registerTask('default', ['sass', 'autoprefixer', 'cssmin', 'uglify', 'imagemin', 'watch']);
	
};