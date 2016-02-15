"use strict";

var gulp = require('gulp');

var sass = require('gulp-sass');

var SASS_SOURCE_DIR = 'sass/';
var STYLES_DEST_DIR = 'public_html/stylesheets/';
var SASS_OPTIONS = {
  errLogToConsole: true,
  // sourceComments: true, //turns on line number comments 
  outputStyle: 'compressed' //options: expanded, nested, compact, compressed
};

gulp.task('sass', function() {
    gulp.src(SASS_SOURCE_DIR + '**/*.scss')
        .pipe(sass(SASS_OPTIONS).on('error', sass.logError))
        .pipe(gulp.dest(STYLES_DEST_DIR));
});
gulp.task('watchSass',function() {
    gulp.watch(SASS_SOURCE_DIR + '**/*.scss', ['sass']);
});

gulp.task('build', ['sass']);
gulp.task('default', ['build']);
