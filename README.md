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
 
# How to Use

After Steps for integration 
run http server
```
php artisan serve
```
make request
```
curl -XGET 'http://localhost:8000/export/calendar?name=Hello+World&from=2019-10-10+10%3A10%3A10&to=2019-10-10+11%3A11%3A11&address=Somewhere+In+Siberia&contact_email=rdubrovin@ronasit.com&description=Test+Message'
```

Result should be

```
BEGIN:VCALENDAR
VERSION:2.0
PRODID:
CALSCALE:GREGORIAN 
BEGIN:VEVENT
DTSTART:20191010T101010Z
DTEND:20191010T111111Z
SUMMARY:Hello World
UID:5c66585042c66
ORGANIZER:MAILTO:rdubrovin@ronasit.com
LOCATION: Somewhere In Siberia
DESCRIPTION:Test Message
END:VEVENT
END:VCALENDAR
```

Now you can use is through request from client to upload ICS-calendar events as you want.
