var elixir = require('laravel-elixir');

var gulp    = require('gulp'),
    cssmin  = require('gulp-cssmin'),
    bless   = require('gulp-bless');

var paths = {
    'assets': 'resources/assets/',
    'pub': 'public/assets/',
    'jquery': 'vendor/bower_components/jquery/',
    'fontawesome': 'vendor/bower_components/font-awesome/',
    'trumbowyg': 'vendor/bower_components/trumbowyg/',
    'textcounter': 'vendor/bower_components/jquery-text-counter/'
};

elixir(function(mix) {

    mix.sass(
            "app.scss",
            false,
            {
                includePaths: [
                    paths.fontawesome + 'scss/',
                ]
            }
    )

    .copy(paths.fontawesome + 'fonts/**', 'public/assets/fonts')
    .copy(paths.assets + 'fonts/**', paths.pub + 'fonts')
    .copy(paths.assets + 'js/entry', 'public/assets/js/entry')
    .copy(paths.trumbowyg + 'dist', 'public/assets/editor')
    .copy(paths.textcounter + '/textcounter.min.js', 'public/assets/textcounter')

    .version(
        [
            '/css/app.css'
        ]
    );

});


// split Task
//
gulp.task('split', function() {
    gulp.src('public/assets/css/app.css')
        .pipe(cssmin())
        .pipe(bless())
        .pipe(gulp.dest('public/assets/css/ie'));
});

