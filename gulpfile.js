const gulp = require('gulp');
const notify = require('gulp-notify'); // エラー通知
const plumber = require('gulp-plumber'); // エラー時のタスク停止防止
const debug = require('gulp-debug'); // ログ表示
const dartSass = require('gulp-dart-sass');
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps'); // ソースマップ出力

const paths = {
    scss: {
        src: 'assets/scss/style.scss', // コンパイル対象
        dest: './assets/css', // 出力先
        watch: 'assets/scss/**/*.scss' //　監視対象
    }
}

/**
 * scssタスクで実行する関数
 */
function scss() {
    return gulp.src(paths.scss.src)
        .pipe(plumber({
            errorHandler: notify.onError('Error: <%= error.message %>')
        }))
        .pipe(sourcemaps.init())
        .pipe(dartSass({
            outputStyle: 'compressed'
        }))
        .pipe(autoprefixer({
            cascade: true
        }))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest(paths.scss.dest))
        .pipe(debug({
            title: 'scss dest:'
        }));
}

/**
 * watchタスクで実行する関数
 */
function watch() {
    return gulp.watch(paths.scss.watch, gulp.series(scss))
}

exports.scss = scss; // scssタスク
exports.watch = watch; // watchタスク
exports.default = gulp.series(scss); // defaultタスク