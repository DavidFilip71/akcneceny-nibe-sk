const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const generateVariables = require('./gulp-tasks/sass/generateVariables');

// Task pro kompilaci SASS do CSS
gulp.task('sass', function () {
    return gulp.src(['src/**/*.scss', '!src/abstracts/_colors.scss', '!src/abstracts/_variables.scss', '!src/abstracts/defs.scss']) // Zdrojové SASS soubory kromě generovaných
        .pipe(sass({ includePaths: ['src/abstracts'] }).on('error', sass.logError))
        .pipe(gulp.dest('css')); // Výstupní složka pro CSS soubory
});

// Task pro generování proměnných a následnou kompilaci SASS
gulp.task('generate-and-sass', gulp.series(generateVariables, 'sass'));

// Task pro sledování změn v _colors.scss a spuštění generate-and-sass
gulp.task('watch-colors', function () {
    gulp.watch('src/abstracts/_colors.scss', gulp.series('generate-and-sass'));
});

// Task pro sledování změn v ostatních SASS souborech a spuštění sass
gulp.task('watch-sass', function () {
    gulp.watch(['src/**/*.scss', '!src/abstracts/_colors.scss'], gulp.series('sass'));
});

// Výchozí task, který spustí sledování změn
gulp.task('default', gulp.parallel('watch-colors', 'watch-sass'));