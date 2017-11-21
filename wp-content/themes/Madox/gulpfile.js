const gulp = require("gulp");
const sass = require ('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const autoprefixer = require('gulp-autoprefixer');
const browserSync = require('browser-sync').create();//do odświeżania automatyczneho przeglądarki
const plumber = require('gulp-plumber');
const gutil = require ('gulp-util');
/*wywoływanie metody
parametr jest fukcją*/
const handleError = function(err) {
    console.log(gutil.colors.blue(err.toString()));
    this.emit('end');
}

gulp.task('server', function(){
    browserSync.init({
        server: ".",
        notify: false,
        // host:
        // port:
        open: true
    });
});


gulp.task("cwiczenie", function () { //"cwiczenie" to nazwa naszego zadania
    console.log("lorem"); //sprawdzamy czy działa
    return gulp.src("js/*.js") //pobierz jakieś pliki
    .pipe(plumber({
        errorHandler: handleError
    }))
    .pipe() //zrób na nich jakieś operacje
    .pipe(gulp.dest("")) //zwróc i zapisz je do innych katalogów, dest to zwróć
});

gulp.task('sass', function(){//kopiujemy z npm.js.com gullp-sass
    return gulp.src('./scss/style.scss')//pobierz plik style.scss
    .pipe(plumber({
         errorHandler: handleError
    }))
    .pipe(sourcemaps.init())
    .pipe(sass({
        outputStyle: 'compressed'//nested, expanded, compact, compressed - kompresja, zawężenie do 1 linii
    }))//wykonuje task
    .pipe(autoprefixer({
            browsers: ['last 2 versions'],//wersje przeglądarek - my mamy 2 ostatnie wersje - Marcin ma ustalone <1%
            cascade: false
    }))
    .pipe(sourcemaps.write("."))//zródło zapisuje się w oddzielnym pliku
    .pipe(gulp.dest('./css'))//zapisuje w kayalogu w scss
    .pipe(browserSync.stream({match: '**/*.css'}));
});

gulp.task('watch', function(){
    gulp.watch('scss/**/*.scss',['sass']);//podglądaj wszytskie pliki z katalogu o rozszerzeniu scss
    gulp.watch('./*.html').on('change', browserSync.reload);
});

gulp.task("default", function () { //zmiana nazwy
    console.log(gutil.colors.blue('Rozpoczynam pracę'));
    gulp.start(['sass', 'watch', 'server']);//wpisujemy co chcemy odpalić

})
