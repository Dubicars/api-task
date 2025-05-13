## Car API

This repo provides a simple API returning cars.

## Structure

For the purpose of the coding task, these are the relevant bits:

* Routes are defined in `routes/api.php`
* There is a `Car` model, with corresponding migration, seeder, and factory in the standard places
* The Api controller is in `app/Http/Controllers/Api/CarController.php`
* The corresponding feature tests are in `tests/Feature/Http/Controllers/Api/CarControllerTest.php`

## Gettings started

First, make sure you have PHP8.3 installed. If not, you can follow setup your environment following the guidelines in [Laravel Installation](https://laravel.com/docs/12.x/installation)

Then prepare and start the API:

```
$ cp .env.example .env
$ composer install
$ php artisan migrate
$ php artisan db:seed
$ composer run dev
```

The above will provide a paginated API endpoint on `http://127.0.0.1:8000/api/cars` by default.
