/* File: gulpfile.js */
'use strict';

var gulp    = require('gulp'),
    gutil   = require('gulp-util'),
    rename  = require('gulp-rename'),
    runSequence = require('run-sequence'),
    
    // CSS
    sass    = require('gulp-sass'),
    concatCss = require('gulp-concat-css'),
    cssnano = require('gulp-cssnano'),
    autoprefixer = require('gulp-autoprefixer'),

    // JS
    uglify  = require('gulp-uglify'),
    concat  = require('gulp-concat'),
    
    // ICON
    iconfont = require('gulp-iconfont'),
    iconfontCss = require('gulp-iconfont-css');

//gulp.watch('./css/*.scss', 'default');

gulp.task('default', function(callback) {
  runSequence('sass',
              'concat-css',
              ['glyphicons', 'compress-js']
              );
});

// ————————————————————————————————
// CSS
// ————————————————————————————————

  gulp.task('sass', function () {

  gutil.log('— sass');
    return gulp.src('./css/*.scss')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('./css/'));
  });

  gulp.task('concat-css', function () {
    gutil.log('— concat');
    return gulp.src(['css/icons.css', 'css/style.css'])
    .pipe(concatCss("./all.css", {rebaseUrls:false}))
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(cssnano())
    .pipe(rename('style.min.css'))
    .pipe(gulp.dest('./src/'));
  });

// ————————————————————————————————
// JAVACRIPT
// ————————————————————————————————

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

//
gulp.watch('./js/*.js', 'sass');

//gulp.task('default', ['glyphicons', 'compress-css','concat-css','nano-css', 'compress-js']);

gulp.task('test', ['sass']);

