// grab our packages
var gulp 	   = require('gulp'),
    jshint     = require('gulp-jshint');
	sass 	   = require('gulp-sass');
	sourcemaps = require('gulp-sourcemaps');
	babel 	   = require('gulp-babel');
	concat     = require('gulp-concat');

// define the default task and add the watch task to it
gulp.task('default', ['watch']);

// configure the jshint task
gulp.task('jshint', () => {
    return gulp.src('src/js/**/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('jshint-stylish'));
});

// Convert ES6+ to ES5 with babel
gulp.task('babel-js', () => {
    return gulp.src('src/js/**/*.js')
    	.pipe(sourcemaps.init())
    	.pipe(concat('bundle.js'))
        .pipe(babel({
            presets: ['es2015']
        }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('assets/js'));
});

gulp.task('build-css', () => {
    return gulp.src('src/scss/**/*.scss')
    	.pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(sourcemaps.write('sourcemaps'))
        .pipe(gulp.dest('assets/css'));
});

// configure which files to watch and what tasks to use on file changes
gulp.task('watch', () => {
    gulp.watch('src/js/**/*.js', ['jshint', 'babel-js']);
    gulp.watch('src/scss/**/*.scss', ['build-css']);g
});
