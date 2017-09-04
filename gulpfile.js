var gulp         = require('gulp');
var minifyCss    = require('gulp-minify-css');
var sass         = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('css', function(){
    return gulp.src('assets/scss/main.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer('last 4 versions'))
        // .pipe(minifyCss())
        .pipe(gulp.dest('assets/css'))
});

gulp.task('watcher',function(){
    gulp.watch('assets/scss/*.scss', ['css']);
});

//____________________________
gulp.task('default', ['watcher', 'css']);