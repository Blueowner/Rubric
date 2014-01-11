module.exports = function(grunt) {

    // 1. All configuration goes here
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {
            // 2. Configuration for concatinating files goes here.
            dist: {
            	src: [
            		'public/js/vendor/jquery-1.10.2.min.js',
            		'public/js/main.js'
            	],
            	dest: 'public/js/production.js',
            }
        },

        uglify : {
        	build: {
        		src: 'public/js/production.js',
        		dest: 'public/js/min/production.min.js'
        	},
        },

        watch: {
        	scripts: {
        		files: ['public/js/*'],
        		tasks: ['concat', 'uglify'],
        		option: {
        			spawn: false,
        		}
        	}
        }

    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['concat', 'uglify']);

};