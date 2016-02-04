/* File: gulpfile.js */
'use strict';

var gulp    = require('gulp'),
    gutil   = require('gulp-util'),
    rename  = require('gulp-rename'),
    sass    = require('gulp-sass'),
    uglify  = require('gulp-uglify'),
    concat  = require('gulp-concat');



// SASS
// ————————————————

gulp.task('sass', function () {
  gutil.log('sass task');
  gulp.src('./css/*.scss')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(rename('style.min.css'))
    .pipe(gulp.dest('./src/'));
  });

// CONCAT
// ————————————————

gulp.task('concat', function () {
    gulp.src('./js/*.js')
    .pipe(concat('script.js'))
    .pipe(gulp.dest('./src/'));
});


// UGLIFY
// ————————————————

gulp.task('compress', function() {
  return gulp.src('./src/script.js')
    .pipe(uglify())
    .pipe(rename('script.min.js'))
    .pipe(gulp.dest('./src/'));
});


// WATCH
// ————————————————

gulp.watch('./css/*.scss', ['sass']);
gulp.watch('./js/*.js', ['concat','compress']);


gulp.task('default', ['sass', 'concat', 'compress']);
