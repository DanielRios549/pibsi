//Gulp tasks for sass

var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('watch');
var rename = require('gulp-rename');

//Run this task before the commit and mainly, before the push

gulp.task('prod', function() {
    return gulp.src('css/sass/style.scss')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('css/'));
});

//Task to copy only components the project needs

gulp.task('bower', function() {
    gulp.src('bower_components/jquery/dist/jquery.min.js')
    .pipe(rename('jquery.js'))
    .pipe(gulp.dest('./js/lib/'));

    gulp.src('bower_components/font-awesome/fonts/FontAwesome.otf')
    .pipe(rename('fontAwesome.otf'))
    .pipe(gulp.dest('./font/icons/'));

    gulp.src('bower_components/font-awesome/scss/_variables.scss')
    .pipe(rename('_fontIcon.txt'))
    .pipe(gulp.dest(''));
});

//Compile only style file with the same name, the imports will be added on file compilled
//Sass outputs: expanded, compact, compressed

gulp.task('sass', function() {
    return gulp.src('css/sass/style.scss')
    .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
    .pipe(gulp.dest('css/'));
});

//Watch all files including all that are imported, than complile using 'sass' task

gulp.task('watch', function() {
    gulp.watch('css/sass/**/*.scss', ['sass']);
});

//execute the task inside the array only with 'gulp' command

gulp.task('default', ['sass', 'watch']);