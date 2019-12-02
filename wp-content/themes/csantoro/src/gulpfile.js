'use strict';

const
    path = require('path'),
    gulp = require('gulp'),
    debug = require('gulp-debug'),
    gutil = require('gulp-util'),
    newer = require('gulp-newer'),
    imagemin = require('gulp-imagemin'),
    sass = require('gulp-sass'),
    postcss = require('gulp-postcss'),
    deporder = require('gulp-deporder'),
    concat = require('gulp-concat'),
    stripdebug = require('gulp-strip-debug'),
    uglify = require('gulp-uglify'),
    del = require('del'),
    babel = require('gulp-babel'),
    browserSync = require('browser-sync'),
    version = require('gulp-version-number');

const paths = {
    scripts: {
        src: 'js/*.js',
        dest: './../'
    },
    styles: {
        src: 'scss/*.scss',
        dest: './../'
    },
    modules: {
        src: 'node_modules'
    }
};

const getUnixTime = () => {
    const date = new Date();
    return date.getTime();
}

// Clean dist folder

const clean = () => del(['./../main.js'], { force: true });

// Compile js files

function scripts()
{
    return gulp.src([
        paths.modules.src+'/jquery/dist/jquery.js',
        paths.scripts.src
    ], { sourcemaps: true })
        .pipe(babel({
            presets: ['@babel/env']
        }))
        //.pipe(uglify())
        .pipe(concat('main.js'))
        .pipe(gulp.dest(paths.scripts.dest));
}

// Compile scss files

function styles() {
    return gulp.src([
            paths.styles.src
        ],
        { sourcemaps: true })
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(paths.styles.dest));
}

// Create BrowserSync instance

const server = browserSync.create();

// Reload BrowserSync

function reload(done) {
    server.reload();
    done();
}

// Launch BrowserSync instance

function serve(done) {
    server.init({
        proxy: 'localhost/csantoro',
        open: false,
        notify: false,
        ghostMode: false,
        ui: {
            port: 8001
        }
    });
    done();
}

// Default task
gulp.task('default', gulp.series(clean, scripts, styles, serve, () =>
{
    gulp.watch(paths.scripts.src, gulp.series(scripts, reload));
    gulp.watch(paths.styles.src, gulp.series(styles, reload));
}));

