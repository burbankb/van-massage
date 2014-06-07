var gulp = require('gulp');
var sass = require('gulp-sass');
var minify = require('gulp-minify-css');
var rename = require('gulp-rename');
var notify = require('gulp-notify');
var concat = require("gulp-concat");
var uglify = require("gulp-uglify");

gulp.task('default', ['sass', 'minifycss'], function() {
	gulp.watch('./library/scss/*.scss', ['sass', 'minifycss']);
});

gulp.task('sass', function() {
	return gulp.src('./library/scss/*.scss')
	.pipe(sass())
	.pipe(rename("main.css"))
	.pipe(gulp.dest("./library/css"))
	.pipe(notify('SASS Compiled Succesfully'));;
});

gulp.task('minifycss', function() {
	return gulp.src('./library/css/*.css')
	.pipe(minify())
	.pipe(rename("main.min.css"))
	.pipe(gulp.dest("./library/css/min"));
});