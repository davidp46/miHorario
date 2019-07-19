const gulp = require('gulp');
const sass = require('gulp-sass');

function estilo() {
  return gulp.src('./scss/**/*.scss')
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(gulp.dest('./resources/css'))
}

function watch() {
  gulp.watch('./scss/**/*.scss', estilo);
}

exports.watch = watch;