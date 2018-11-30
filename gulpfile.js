var gulp = require('gulp')
var sass = require('gulp-sass')
var sourcemaps = require('gulp-sourcemaps')
var require = require('browser-sync').create()

// SASS
gulp.task('sass', function() {
    return gulp.src(['src/scss/*.scss'])
        .pipe(sourcemaps.init())
        .pipe(sass({
            outputStyle: 'compressed',
        }))
        .pipe(sourcemaps.write('../maps'))
        .pipe(gulp.dest("build/css"))
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

// Fonts
gulp.task('fonts', function (){
    return gulp.src('src/fonts/*.otf')
    .pipe(gulp.dest('build/fonts'))
})

// Move the javascript files into our /src/js folder
gulp.task('js', function() {
    return gulp.src(['node_modules/bootstrap/dist/js/bootstrap.min.*', 'src/js/*.js'])
        .pipe(gulp.dest("build/js"))
        // .pipe(browserSync.stream());
});

gulp.task('img', function () {
    return gulp.src(['src/img/**/*.svg', 'src/img/**/*.png', 'src/img/**/*.jpg'])
    .pipe(gulp.dest('build/img'))
})

// Static Server + watching scss/html files
gulp.task('serve', ['sass'], function() {
    browserSync.init({
        proxy: 'localhost:8888'
    });
});



gulp.task('watch', ['default'], function () {
    gulp.watch('src/scss/*.scss', ['sass'])
    gulp.watch('src/*.css', ['css'])
    gulp.watch('src/**/*.php', ['php'])
    gulp.watch('src/js/*.js', ['js'])
    gulp.watch('src/img/**.*', ['img'])
    gulp.watch('src/fonts/**.*', ['fonts'])
})


gulp.task('default', ['css','php', 'sass', 'js', 'img', 'fonts']);