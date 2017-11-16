var gulp = require("gulp");
var sass = require("gulp-sass");
var autoprefixer = require("gulp-autoprefixer");
var uglify = require("gulp-uglify");
var plumber = require("gulp-plumber");
var rename = require("gulp-rename");

gulp.task("js", function(){
    gulp.src(["js/**/*.js","!js/min/**/*.js","!js/bs/**/*.js"])
        .pipe(plumber())
        .pipe(uglify())
        .pipe(rename({extname: '.min.js'}))
        .pipe(gulp.dest("./js/min"))
});

gulp.task("sass", function(){
	gulp.src("sass/**/*.scss")
		.pipe(plumber())
		.pipe(sass())
		.pipe(autoprefixer())
		.pipe(gulp.dest("./css"))
});

gulp.task("default", function(){
	gulp.watch(	["js/**/*.js","!js/min/**/.js","!js/bs/**/*.js"], ["js"]);
	gulp.watch("sass/**/*.scss", ["sass"]);
});