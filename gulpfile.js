/* File: gulpfile.js */
'use strict';

var gulp    = require('gulp'),
    gutil   = require('gulp-util'),
    rename  = require('gulp-rename'),
    
    // CSS
    sass    = require('gulp-sass'),
    concatCss = require('gulp-concat-css'),
    cssmin = require('gulp-cssmin'),

    // JS
    uglify  = require('gulp-uglify'),
    concat  = require('gulp-concat'),
    
    // ICON
    iconfont = require('gulp-iconfont'),
    iconfontCss = require('gulp-iconfont-css');

// ————————————————————————————————
// CSS
// ————————————————————————————————

  // SASS
  // ————————————————

  gulp.task('sass', ['concat'], function () {
    
      gulp.src('./css/*.scss')
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(gulp.dest('./css/'));
      
      gulp.src(['css/icons.css', 'css/style.css'])
        .pipe(concatCss("./all.css", {rebaseUrls:false}))
        .pipe(gulp.dest('./css/'));

      gulp.src('./css/all.css')
      .pipe(cssmin("./css/all.css", {rebaseUrls:false}))
      .pipe(gulp.dest('./src/'));

  });


  gulp.task('concat', ['min-css'], function () {

    //gutil.log('CONCAT');
    // gulp.src('./css/*.css')
    //   .pipe(concatCss("./all.css", {rebaseUrls:false}))
    //   .pipe(gulp.dest('./css/'));

  });

  gulp.task('min-css', function () {

    // gutil.log('MIN');
    // gulp.src('./css/all.css')
    //   .pipe(cssmin("./css/all.css", {rebaseUrls:false}))
    //   .pipe(gulp.dest('./src/'));

  });

// ————————————————————————————————
// JAVACRIPT
// ————————————————————————————————

  // CONCAT JS
  // ————————————————

  gulp.task('compress-js', function () {
    gulp.src('./js/*.js')
    .pipe(concat('all.js'))
    .pipe(uglify())
    .pipe(rename('script.min.js'))
    .pipe(gulp.dest('./src/'));
  });


// ICON
// ————————————————

gulp.task('glyphicons', function() {
 return gulp.src('img/icons/**/*')
    .pipe(iconfontCss({
      fontName: 'icons',
      targetPath: './../css/icons.css',
      fontPath: './fonts/'
    }))
    .pipe(iconfont({
      fontName: 'icons'
     }))
    .pipe( gulp.dest('./fonts/') )
})


// WATCH
// ————————————————

gulp.watch('./css/*.scss', ['sass']);
gulp.watch('./js/*.js', ['compress-js']);

gulp.task('default', ['glyphicons', 'sass', 'compress-js']);

