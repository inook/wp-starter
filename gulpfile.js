/* File: gulpfile.js */
'use strict';

// ————————————————————————————————
// PLUGINS
// ————————————————————————————————

  var gulp    = require('gulp'),
      gutil   = require('gulp-util'),
      rename  = require('gulp-rename'),
      
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


// ————————————————————————————————
// PATH
// ————————————————————————————————

  var paths = {
      css: ['./css/*.scss', './css/*.css'],
      js: './js/*.js',
      icons: 'img/icons/**/*'
  };


// ————————————————————————————————
// DEFAULT TASK
// ————————————————————————————————

  gulp.task('default', ['watch', 'sass', 'glyphicons', 'compress-js']);

// ————————————————————————————————
// WATCH
// ————————————————————————————————

  gulp.task('watch', function() {
    
    // CSS
    gulp.watch(paths.css, ['sass']);

    // JS
    gulp.watch(paths.js, ['compress-js']);

    // ICONS
    gulp.watch(paths.icons, ['glyphicons']);

  });

// ————————————————————————————————
// CSS
// ————————————————————————————————

  gulp.task('sass', function () {

    return gulp.src('./css/style.scss')
    
    // SASS
    .pipe(sass({
      outputStyle: 'compressed',
      includePaths: ['node_modules/foundation-sites/scss']
    }).on('error', sass.logError))
    
    // AUTOPREFIXER
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    
    // RENAME
    .pipe(rename('style.min.css'))
    
    // DEST
    .pipe(gulp.dest('./src/'));

 });


// ————————————————————————————————
// JAVACRIPT
// ————————————————————————————————

  gulp.task('compress-js', function () {
    
    return gulp.src(paths.js)

    // CONCAT
    .pipe(concat('all.js'))

    // UGLIFY
    .pipe(uglify())
    
    // RENAME
    .pipe(rename('script.min.js'))

    // DEST
    .pipe(gulp.dest('./src/'));

  });


// ICON
// ————————————————

  gulp.task('glyphicons', function() {
   
   return gulp.src('img/icons/**/*')
    
    // CSS
    .pipe(iconfontCss({
      fontName: 'icons',
      targetPath: './../css/_icons.scss',
      fontPath: '../fonts/'
    }))

    // ICON
    .pipe(iconfont({
      fontName: 'icons',
      appendUnicode: true,
      normalize: true,
      centerHorizontally: true
    }))
    
    // DEST
    .pipe( gulp.dest('./fonts/') )

  });



