//Gulp tasks for sass

var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('watch');

//Compile only style file with the same name, the imports will be added on file compilled
//Sass outputs: expanded, compact, compressed

gulp.task('sass', function() {
    return gulp.src('sass/style.scss')
    .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
    .pipe(gulp.dest(''));
});

//Watch all files including all that are imported, than complile using 'sass' task

gulp.task('watch', function() {
    gulp.watch('./sass/**/*.scss', ['sass']);
});

//execute the task inside the array only with 'gulp' command

gulp.task('default', ['watch']);