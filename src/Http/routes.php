<?php

use \RonasIT\Support\Http\Controllers\CalendarController;

Route::get(config('ics-generator.route'), ['uses' => CalendarController::class . '@export']);