/* jshint ignore:start */
var config = {
    build: { //Тут мы укажем куда складывать готовые после сборки файлы
        html: 'dist/',
        js: 'dist/scripts/',
        css_dist: 'dist/styles/',
        img: 'dist/img/',
        fonts: 'dist/fonts/',
        less: 'dist/styles/',
        php: 'dist/'
    },
    src: { //Пути откуда брать исходники
        php: '*.php',
        html: 'app/*.html', //Синтаксис src/*.html говорит gulp что мы хотим взять все файлы с расширением .html
        js: 'scripts/*.js',//В стилях и скриптах нам понадобятся только main файлы        
        style: 'app/style/main.css',
        img: 'img/**/*.*', //Синтаксис img/**/*.* означает - взять все файлы всех расширений из папки и из вложенных каталогов
        fonts: 'fonts/**/*.{eot,svg,ttf,woff,woff2}',
        less_src: 'styles/main.less'
    },
    watch: { //Тут мы укажем, за изменением каких файлов мы хотим наблюдать
        php: '*.php',
        php_lib: 'lib/*.php',
        php_configs: 'configs/*.php',        
        js: 'scripts/**/*.js',        
        style: 'styles/**/*.css',
        style_less: 'styles/**/*.less',
        img: 'img/**/*.*',
        fonts: 'styles/fonts/**/*.*'
    },
    clean: 'dist/'
};

const gulp = require('gulp');
const gulpLoadPlugins = require('gulp-load-plugins');
const runSequence = require('run-sequence');
const $ = gulpLoadPlugins();

// --------------------------------------------------------------------
// Task: Build php(html)
// --------------------------------------------------------------------
gulp.task('build:php', function() {
  log('Build PHP');
  return gulp.src(config.src.php)
    .pipe($.plumber())  
    .pipe($.useref({searchPath: ['.']}))     
    .pipe($.if(['*.js'], $.uglify()))
    /*.pipe($.if('*.css', $.cssnano({safe: true, autoprefixer: false})))
    .pipe($.if('*.html', $.htmlmin({collapseWhitespace: true})))*/
    .pipe(gulp.dest(config.build.php));
});

// --------------------------------------------------------------------
// Task: Build js
// --------------------------------------------------------------------
gulp.task('build:js', function() {
  log('Build config php');  
  return gulp.src(config.src.js)
    .pipe($.concat('main.js'))
    .pipe(gulp.dest(config.build.js));
});

// --------------------------------------------------------------------
// Task for compilation less to css
// --------------------------------------------------------------------
gulp.task('build:styles', function() {
  log('Compiling Less --> CSS');
  return gulp
    .src(config.src.less_src)
    .pipe($.plumber())
    .pipe($.less())
   /* .pipe($.autoprefixer({browsers:['last 2 version','> 5%']}))*/
    .pipe($.autoprefixer({browsers: ['> 1%', 'last 2 versions', 'Firefox ESR']}))
    .pipe(gulp.dest(config.build.css_dist));
});

gulp.task('copy:fonts', function() {
  log('Copy fonts');  
  return gulp.src(config.src.fonts)
    .pipe(gulp.dest(config.build.fonts));
});

// --------------------------------------------------------------------
// Task: Build app
// --------------------------------------------------------------------
gulp.task('build:app', () => {
  log('Build app');  
  return new Promise(resolve => {
    dev = false;
    runSequence(
        [
            'build:php',
            'build:js',
            'build:styles',
            'copy:fonts'
        ], resolve);
  });
});

// --------------------------------------------------------------------
// Task: Watch
// --------------------------------------------------------------------
gulp.task('watch', function(){
    log('Watch');
    $.watch([config.watch.php], function(event, cb) {
        gulp.start(['build:php']);        
    });     
    $.watch([config.watch.js], function(event, cb) {
        gulp.start(['build:js']);
        /*gulp.start(['build:js','reload']);*/
    });      
    $.watch([config.watch.style_less], function(event, cb) {
        gulp.start(['build:styles']);
    });    
});

// --------------------------------------------------------------------
// Task: Default
// --------------------------------------------------------------------

gulp.task('default', ['build:app','watch']);

// --------------------------------------------------------------------
// Task: Function log
// --------------------------------------------------------------------
function log(msg) {
  if(typeof(msg) === 'object') {
    for (var item in msg ) {
      if (msg.hasOwnProperty(item)) {
        $.util.log($.util.colors.blue(msg[item]));
      }
    }
  } else {
    $.util.log($.util.colors.blue(msg));
  }
}