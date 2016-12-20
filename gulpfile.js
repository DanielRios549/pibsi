var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('watch');

//Sass outputs: expanded, compact, compressed

gulp.task('sass', function() {
    return gulp.src('sass/style.scss')
    .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
    .pipe(gulp.dest(''));
});

gulp.task('watch', function() {
    gulp.watch('./sass/**/*.scss', ['sass']);
});


gulp.task('default', ['watch']);