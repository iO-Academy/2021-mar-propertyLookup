var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');

function sassCompile(cb) {
    return gulp.src("app/scss/style.scss")
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest("app/css"));
    cb();
}

function watch() {
    sassCompile()
    gulp.watch("app/scss/**/*.scss", sassCompile);
}

exports.sass = sassCompile;
exports.watch = watch;