let gulp = require('gulp');
let connect = require('gulp-connect-php');
let browserSync = require('browser-sync');
let sass = require('gulp-sass');
let autoprefixer = require('gulp-autoprefixer');
let plumber = require('gulp-plumber');
let progeny = require('gulp-progeny');
let sourcemaps = require('gulp-sourcemaps');
let packageImporter = require('node-sass-package-importer');

//Sass
gulp.task('sass', function(done){
  gulp.src('assets/styles/style.scss')
  .pipe(plumber())
  .pipe(progeny())
  .pipe(sourcemaps.init())
  .pipe(sass({
    outputStyle: 'expanded'
  }))
  .pipe(autoprefixer({
    cascade: false
  }))
  .pipe(sass({
    importer: packageImporter({
      extensions: ['.scss', '.css']
    })
  }))
  .pipe(sourcemaps.write())
  .pipe(gulp.dest('assets/styles/style.css'))
  done();
});

// Browser Sync
gulp.task('bs', function() {
  connect.server({
    port:8001,
    base:'GermanyWalk'
  }, function (){
    browserSync({ //1
      proxy: "localhost:8001"
    });
  });
});

// Reload Browser
gulp.task( 'bs-reload', function() {
    browserSync.reload(); // 2
});

//
// Default task
//
gulp.task( 'default', [ 'bs', 'sass' ], function() { // 1
  gulp.watch("index.php", ['bs-reload']); // 2
  gulp.watch("assets/styles/style.scss", [ 'sass', 'bs-reload' ]); // 3
});