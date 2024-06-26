<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About Project

This project is Laravel with Inertia & Vue, you can call your .vue from your controller by using `Inertia::render()`

## Command

I Already create some commands to make easy in creating vue file, the commands are:

-   ` php artisan make:inertia-page {filename}` the command will create .vue file in resource/js/Pages/ path
-   ` php artisan make:inertia-crud {foldername}` the command will create folder under resource/js/Pages/ path with Index.vue, Edit.Vue, and Create.vue file
-   `php artisan make:inertia-component {componentname}` the command will create .vue file in resource/js/Components/ path
