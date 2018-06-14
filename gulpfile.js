var gulp = require('gulp')
var sass = require('gulp-sass')

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src(['src/scss/*.scss'])
        .pipe(sass())
        .pipe(gulp.dest("build/css"))
        // .pipe(browserSync.stream());
});

// CSS
gulp.task('css', function (){
    return gulp.src(['src/*.css'])
    .pipe(gulp.dest('build'))
})

// PHP
gulp.task('php', function (){
    return gulp.src('src/**/*.php')
    .pipe(gulp.dest('build'))
})

// Move the javascript files into our /src/js folder
gulp.task('js', function() {
    return gulp.src(['node_modules/bootstrap/dist/js/bootstrap.min.*', 'src/js/*.js'])
        .pipe(gulp.dest("build/js"))
        // .pipe(browserSync.stream());
});

gulp.task('img', function () {
    return gulp.src(['src/img/**/*.svg'])
    .pipe(gulp.dest('build/img'))
})

// Static Server + watching scss/html files
gulp.task('serve', ['sass'], function() {

    /* browserSync.init({
        server: "./src"  
    }); */

    gulp.watch(['node_modules/bootstrap/scss/bootstrap.scss', 'src/scss/*.scss'], ['sass']);
    /* gulp.watch("src/*.html").on('change', browserSync.reload); */
});

gulp.task('watch', ['default'], function () {
    gulp.watch('src/scss/*.scss', ['sass'])
    gulp.watch('src/*.css', ['css'])
    gulp.watch('src/**/*.php', ['php'])
    gulp.watch('src/js/*.js', ['js'])
    gulp.watch('src/img/**.*', ['img'])
})


gulp.task('default', ['css','php', 'sass', 'js', 'img']);