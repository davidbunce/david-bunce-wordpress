module.exports = function(grunt) {

    // 1. All configuration goes here
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {
            options: {
                separator: ';',
            },
            dist: {
                src: ['js/src/*.js'],
                dest: 'js/live/built.js',
            },
        },

        uglify: {
            options: {
                report: 'gzip',
                mangle: {
                    except: ['jQuery']
                },
            },

            my_target: {
                files: {
                    'js/live/built.min.js': ['js/live/built.js']
                }
            }
        },

        svgmin: {                       // Task
            options: {                  // Configuration that will be passed directly to SVGO
                plugins: [{
                    removeViewBox: false
                }, {
                    removeUselessStrokeAndFill: false
                }, {
                    convertPathData: {
                        straightCurves: false // advanced SVGO plugin option
                    }
                }]
            },
            dist: {                     // Target
                files: [{               // Dictionary of files
                    expand: true,       // Enable dynamic expansion.
                    cwd: 'img/svg-assets',     // Src matches are relative to this path.
                    src: ['**/*.svg'],  // Actual pattern(s) to match.
                    dest: 'img/svg-live',       // Destination path prefix.
                    ext: '.svg'     // Dest filepaths will have this extension.
                    // ie: optimise img/src/branding/logo.svg and store it in img/branding/logo.min.svg
                }]
            }
        },

        imagemin: {
            options: {
                cache: false,
                optimizationLevel: 0,
            },
            dynamic: {
                files: [{
                    expand: true,
                    cwd: 'img/assets/',
                    src: ['*.{png,jpg,gif}'],
                    dest: 'img/live/'
                }]
            }
        },

        grunticon: {
            myIcons: {
                files: [{
                    expand: true,
                    cwd: 'img/svg-live',
                    src: ['*.svg', '*.png'],
                    dest: "img/icons"
                }],
                options: {
                }
            }
        },

        sass: {
            dist: {
                options: {
                    // includePaths: require('bourbon').includePaths,
                    outputStyle: 'compressed'
                },
                files: {
                    'css/stylesheet.css': 'sass/stylesheet.scss'
                }
            }
        },

        watch: {
            options: {
                livereload: true,
            },
            scripts: {
                files: ['js/src/*.js'],
                tasks: ['concat', 'uglify'],
                options: {
                    spawn: false,
                },
            },

            sass: {
                files: ['sass/*.scss', 'sass/davidbunce/*.scss', 'sass/bitters/*.scss'],
                tasks: ['sass'],
                options: {
                    spawn: false,
                }
            },

            images: {
                files: ['img/assets/*.{png,jpg,gif}'],
                tasks: ['imagemin'],
                options: {
                    spawn: false,
                }
            },

            svgmin: {
                files: ['img/svg-assets/*.svg'],
                tasks: ['svgmin', 'grunticon'],
                options: {
                    spawn: false,
                }
            },
        }

    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-svgmin');
    grunt.loadNpmTasks('grunt-grunticon');

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['imagemin'], ['watch'], ['sass'], ['uglify'], ['grunticon'], ['svgmin']);

};

