var gulp = require('gulp');
var sass = require('gulp-sass');
var plumber = require('gulp-plumber');
var composer = require('gulp-composer');

gulp.task('default', function(){
	// scss内のscssファイルに変更が加えられたらscssタスクを実行
	gulp.watch('public/scss/*.scss', ['scss']);
	// composer.jsonファイルに変更が加えられたらcomposerタスクを実行
	gulp.watch('composer.json', ['composer']);
});

gulp.task('scss', function() {
	// scss内のscssファイルをコンパイルし、css内に出力
	gulp.src('public/scss/*.scss')
									// scssのコンパイルでエラーが出た場合、タスクが終了しないようにする
									.pipe(plumber())
									.pipe(sass())
									.pipe(gulp.dest('public/css/'));
});

gulp.task('composer', function () {
    composer('update',{bin:'composer'});
});
