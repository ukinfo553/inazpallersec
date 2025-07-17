"use strict";
 var porjectFolder='infosectrain.com/pages/lp/ceh/';
 var port=8000; // xampp 8000 or 8080 
 
var gulp = require('gulp'),
  sass = require('gulp-sass'),
  del = require('del'),
  uglify = require('gulp-uglify'),
  cleanCSS = require('gulp-clean-css'),
  rename = require("gulp-rename"),
  merge = require('merge-stream'),
  htmlreplace = require('gulp-html-replace'),
  autoprefix = require('gulp-autoprefixer'), 
  browserSync = require('browser-sync').create();
var concat = require('gulp-concat');
var es = require('event-stream');
const minify = require('gulp-minify');
 
const include = require('gulp-include')
// scss
gulp.task('scss', (done) => {
  gulp.src('offline-assets/scss/*.scss')
    .pipe(sass({outputStyle: 'nested'}).on('error', sass.logError))
    //.pipe(autoprefix()) 
    .pipe(gulp.dest('assets/css/')); 
    done();
});

 // Minify CSS
gulp.task('css-build', gulp.series('scss', function cssMinify(done) {

 return  gulp.src('offline-assets/scss/*.scss')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    //.pipe(autoprefix())
    .pipe(cleanCSS())
    .pipe(rename({
      suffix: '.min'
    })) 
    .pipe(gulp.dest('assets/css/'))
    .pipe(browserSync.stream()); 
    done(); 
  
}));

 
 

 // JS
gulp.task('js2', (done) => {
  gulp.src('offline-assets/js/*.js')
  .pipe(include())
   .pipe(uglify())
    //.pipe(autoprefix()) 
    .pipe(gulp.dest('assets/js/')); 
    done();
});

// JavaScript Tasks
gulp.task('js', () => {

  const plugins = ['offline-assets/js/*.js']//getJSModules();
 
  return gulp.src(plugins)
  .pipe(include())
    //.pipe(concat('mdb.js'))
    .pipe(gulp.dest('assets/js/'));

    gulp.series('js-lite-build');
    gulp.series('js-minify');

});

gulp.task('js-build', () => {
  const plugins = ['offline-assets/js/*.js']//getJSModules();
 
  return gulp.src(plugins) 
  .pipe(include())
  .pipe(minify({
      ext:{
        // src:'.js',
        min:'.min.js'
      },
      noSource: true,
    }))
    .pipe(gulp.dest('assets/js/'));

    gulp.series('js-lite-build');
    gulp.series('js-minify'); 
  
});

  
 
// Configure the browserSync task and watch file path for change
gulp.task('dev', function browserDev(done) {
/*  browserSync.init({
    server: {
      baseDir: "./"
    }   
  });*/
  browserSync.init({
    proxy: "localhost/"+porjectFolder,
    port: port  
 });

 gulp.watch(['offline-assets/scss/*.scss','offline-assets/scss/**/*.scss',
   '!offline-assets/scss/vendors/**',
   '!offline-assets/scss/base/**',
   '!offline-assets/scss/common/**',
   '!offline-assets/scss/cross-browser/**',
   '!offline-assets/scss/layout/**',
   '!offline-assets/scss/include/**',
   ], gulp.series('scss', function cssBrowserReload (done) {
    browserSync.reload();
    done(); //Async callback for completion.
  }));

   gulp.watch(['offline-assets/js/*.js',   
   '!offline-assets/js/polyfills/**',
   '!offline-assets/js/main/**',
   '!offline-assets/js/vendors/**',
   '!offline-assets/js/plugins/**',
   '!offline-assets/js/common/**',
     ], gulp.series('js', function cssBrowserReload (done) {
    browserSync.reload();
    done(); //Async callback for completion.
  }));


 
  gulp.watch(['**/*.html']).on('change', browserSync.reload);
  gulp.watch(['**/*.php']).on('change', browserSync.reload);
  //gulp.watch("assets/img/*", ['imagemin', 'svgmin']);
  done();
});
  
gulp.task('clean', () => {
  return del([
    'assets/css/*.css',
  ]);
});


// Default task
gulp.task("default", gulp.series("clean","dev",'scss','js' ));
gulp.task("build", gulp.series("css-build",'js-build' ));

 function getJSModules() {
  //delete require.cache[require.resolve('offline-assets/js/vendor')];
  return require('./offline-assets/js/vendor');
}
;