const gulp = require('gulp');

gulp.task('jquery', function(){
    return gulp.src(['node_modules/jquery/dist/jquery.min.js'])
        .pipe(gulp.dest('assets/dist/js/'));
});

/**
 * Task: gulp jquery
 */
gulp.task('default', gulp.series(
    'jquery'
));
