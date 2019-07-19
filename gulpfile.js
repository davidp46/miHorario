const gulp = require('gulp');
const sass = require('gulp-sass');

function estilo() {
  return gulp.src('./scss/**/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('./public/css'))
}

exports.estilo = estilo;