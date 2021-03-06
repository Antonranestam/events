const gulp = require('gulp');
const sass = require('gulp-sass');
const scsslint = require('gulp-scss-lint');
const svg2png = require('gulp-svg2png');
const browserify = require('browserify');
const shim = require('browserify-shim');
const cssGlobbing = require('gulp-css-globbing');
const source = require('vinyl-source-stream');
const gutil = require('gulp-util');
const watchify = require('watchify');
const autoprefixer = require('gulp-autoprefixer');

// Browserify
const b = browserify({
  basedir: './js',
  entries: './main.js',
  cache: {},
  packageCache: {}
});

// Bundle Browserify
function bundle() {
  return b.bundle()
    .on('error', function (err) {
      gutil.log(gutil.colors.red('Browserify build error:\n') + err.message);
    })
    .pipe(source('bundle.js'))
    .pipe(gulp.dest('./dist/js'));
}

// Browserify gulp task
gulp.task('browserify', function () {
  return bundle();
});

gulp.task('autoprefix', () =>
  gulp.src('./dist/css/main.css')
    .pipe(autoprefixer({
        browsers: ['last 5 versions']
    }))
    .pipe(gulp.dest('dist/css'))
);

// svg2png
gulp.task('svg2png', function () {
  gulp.src('./graphics/**/*.svg')
    .pipe(svg2png())
    .pipe(gulp.dest('./graphics'));
});

// Compile sass
gulp.task('sass', function () {
  return gulp.src(['./scss/main.scss', './scss/print.scss'])
    .pipe(cssGlobbing({
      extensions: ['.scss']
    }))
    .pipe(sass({
      includePaths: [
        'node_modules/bourbon/app/assets/stylesheets/',
        'node_modules/bourbon-neat/app/assets/stylesheets/',
        'node_modules/normalize.css/',
        'node_modules/Stratagem/'
      ]
    }).on('error', sass.logError))
    .pipe(gulp.dest('./dist/css'));
});

// Lint sass
gulp.task('scss-lint', function () {
  return gulp.src(['./scss/**/*.scss', '!./scss/print.scss', '!scss/normalize.scss', '!scss/vendor/**/*'])
    .pipe(scsslint());
});


// Watch .scss and .js
gulp.task('watch', function () {
  gulp.watch('scss/**/*.scss', ['scss-lint', 'autoprefix', 'sass']);
  gulp.watch('js/**/*.js');

  b.plugin(watchify);
  b.on('update', bundle);
  b.on('log', function (msg) {
    gutil.log('Browserify build - ' + msg);
  });
  bundle();
});

// Set default task
gulp.task('default', ['watch']);
