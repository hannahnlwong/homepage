var gulp = require('gulp'),
	sass = require('gulp-sass');

gulp.task('default', ['styles', 'watch']);
//here we define the list of things to happen when we run gulp styles
gulp.task('styles',function() {
	gulp.src('wp-content/themes/theme-hackeryou/style.scss')
		.pipe(sass())
		.pipe(gulp.dest('wp-content/themes/theme-hackeryou/'))
});

gulp.task('watch',function() {
	gulp.watch('wp-content/themes/theme-hackeryou/style.scss',['styles']);
});