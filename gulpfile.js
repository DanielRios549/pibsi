var gulp = require('gulp');
var sass = require('gulp-sass');

//Sass outputs: expanded, compact, compressed

gulp.task('sass', function() {
    return gulp.src('sass/style.scss')
    .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
    .pipe(gulp.dest(''));
});

gulp.task('sass:watch', function() {
    gulp.watch('sass/style.scss', ['sass']);
});

gulp.task('default', ['sass']);