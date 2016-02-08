module.exports = function(grunt) {
	
	grunt.initConfig({
		
		less: {
			src: {
				expand: true,
				cwd: 'resources/less/',
				src: [
					'**/*.less'
				],
				ext: '.css',
				dest: 'resources/css/'
			}
		},

		imagemin: {  
		dynamic: {                         // Another target 
		      files: [{
		        expand: true,                  // Enable dynamic expansion 
		        cwd: 'resources/images/',                   // Src matches are relative to this path 
		        src: ['**/*.{png,jpg,gif}'],   // Actual patterns to match 
		        dest: 'resources/images/min/'                  // Destination path prefix 
		      }]
		    }
		},
		
		cssmin: {
		  target: {
		    files: [{
		      expand: true,
		      cwd: 'resources/css/',
		      src: ['**/*.css'],
		      dest: 'resources/css/min',
		      ext: '.min.css'
		    }]
		  }
		},
		
		uglify: {
		    my_target: {
		      files: [{
		          expand: true,
		          cwd: 'resources/js',
		          src: '**/*.js',
		          dest: 'resources/js/min'
		      }]
		    }
		  },
		
		watch: {
			styles: {
				files: ['resources/less/**/*.less'], // which files to watch
				tasks: ['less'],
				options: {
					nospawn: true
				}
			}
		}
	
	});
	
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.registerTask('default', ['less', 'watch']);
}