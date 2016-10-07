module.exports = function (grunt) {

	// 1. All configuration goes here
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		concat: {
			/*javascripts: {
				src: [
					'resources/js/main.js'
				],
				dest: 'public/js/production.min.js'			// we concatenate the JS to here to if we need to, we can skip the uglification for debugging
			},*/
			css: {
				src: [
					'resources/css/main.css'
				],
				dest: 'public/css/production.min.css'		// we concatenate the CSS to here so if we need to, we can skip the minification for debugging
			}
		},

		sass: {
			dist: {
				files: {
					'resources/css/main.css': 'resources/sass/main.scss'
				}
			}
		},

		autoprefixer: {
			production_css: {
				src: 'public/css/production.min.css'
			}
		},

		cssmin: {
			css: {
				src: 'public/css/production.min.css',		// we overwrite the min.css file that we created in concat
				dest: 'public/css/production.min.css'
			}
		},

        browserify: {
            dist: {
                options: {
                    transform: [['babelify', {presets: ['es2015']}]]
                },
                files: {
                    'public/js/production.min.js': ['resources/js/main.js']
                }
            }
        },

		uglify: {
			main: {
				files: {
					'public/js/production.min.js': ['public/js/production.min.js'] // we overwrite the min.js file that we created in concat
				}
			},
			options: {
				mangle: false
			}
		},

		copy: {
			main: {
				files: [
					{expand: true, src: ['node_modules/font-awesome/fonts/*'], dest: 'public/fonts/', filter: 'isFile', flatten: true},
					{expand: true, cwd: 'resources/img/', src: ['**'], dest: 'public/img/', filter: 'isFile', flatten: false}
				]
			}
		},

		// the watch task doesn't uglify or minify (for development), run grunt again to get full production code
		watch: {
			scripts: {
				files: ['resources/js/**/*.js'],
				tasks: ['browserify'],
				options: {
					spawn: false
				}
			},
			css: {
				files: ['resources/sass/**/*.scss', 'resources/css/*.css'],
				tasks: ['sass:dist', 'concat:css', 'autoprefixer:production_css'],
				options: {
					spawn: false
				}
			},
            img: {
                files: ['resources/img/**'],
                tasks: ['copy'],
                options: {
                    spawn: false
                }
            },
			grunt: {
				files: ['gruntfile.js'],
				tasks: ['reload'],
				options: {
					spawn: false
				}
			}
		}
	});

	require('load-grunt-tasks')(grunt);

	grunt.registerTask('default', ['copy', 'sass:dist', 'concat', 'browserify', 'uglify', 'cssmin', 'autoprefixer:production_css', 'watch']);
	grunt.registerTask('reload' , ['copy', 'sass:dist', 'concat', 'browserify', 'uglify', 'cssmin', 'autoprefixer:production_css']);

};
