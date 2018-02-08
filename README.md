# ics-generator
This package developed for easy integration of ics-file generating. 
It registers a router in the project, using which you can get the generated ics file.

# Steps for integration:
1. Run command:
````
composer require ronasit/laravel-ics-generator
````
2. Add provider to `config/app.php`
````
....
RonasIT\Support\CalendarServiceProvider::class,
....
````
3. Run command 
````
php artisan vendor:publish
```` 
4. If you want you can change route of generator in `config/ics-generator.php`. Default route is
`/export/calendar` 

# Parameters of request

* address - string, required
* from - date in format `Y-m-d H:i:s`, required
* to - date in format `Y-m-d H:i:s`, required
* description - string, required
* name - string, required
* contact_email - string, email, required
 
