module.exports = function(grunt) {

    grunt.initConfig({
        'dart-sass': {
            options: {
                sourceMap: true,
                outFile: 'dist/css/main.css.map'
            },
            dist: {
                files: {
                    'dist/css/main.css': 'src/sass/main.scss',
                }
            }
        },
        cssmin: {
            options: {
                //sourceMap: true,
                //outFile: 'dist/css/main.min.css.map',
                mergeIntoShorthands: false,
                roundingPrecision: -1,
            },
            target: {
                files: {
                    'dist/css/main.min.css': 'dist/css/main.css'
                }
            }
        },
        uglify: {
            options: {
                mangle: {
                    toplevel: true,
                    reserved: ['jQuery', 'Backbone']
                },
            },
            target: {
                files: {
                    'dist/js/main.min.js': 'src/js/*.js'
                }
            }
        },
        copy: {
            cpcss: {
                files: [{
                    cwd: 'dist/css',
                    src: '**/*',
                    dest: '../assets/css',
                    expand: true,
                }]
            },
            cpjs: {
                files: [{
                    cwd: 'dist/js',
                    src: '**/*',
                    dest: '../assets/js',
                    expand: true,
                }]
            }
        },
        watch: {
            css: {
                files: 'src/sass/**/*.scss',
                tasks: ['dart-sass','cssmin','copy:cpcss'],
            },
            js: {
                files: 'src/js/**/*.js',
                tasks: ['uglify','copy:cpjs'],
            },
        },
    });

    grunt.loadNpmTasks('grunt-dart-sass');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Default task(s).
    grunt.registerTask('default', ['dart-sass','cssmin','uglify','copy','watch']);
};
