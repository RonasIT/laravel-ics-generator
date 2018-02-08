<?php
/**
 * Created by PhpStorm.
 * User: romandubrovin
 * Date: 08.02.2018
 * Time: 11:12
 */

namespace RonasIT\Support\Http\Controllers;

use Illuminate\Routing\Controller;
use Ical\Ical;
use RonasIT\Support\Http\Requests\ExportCalendarRequest;
use DateTime;
use Symfony\Component\HttpFoundation\Response;

class CalendarController extends Controller
{
    public function export(ExportCalendarRequest $request) {
        $ical = (new Ical())
            ->setAddress($request->input('address'))
            ->setDateStart(new DateTime($request->input('from')))
            ->setDateEnd(new DateTime($request->input('to')))
            ->setDescription($request->input('description'))
            ->setSummary($request->input('name'))
            ->setOrganizer($request->input('contact_email'))
            ->setFilename(uniqid());

        return response($ical->getICAL(), Response::HTTP_OK, [
            'Content-type' => 'text/calendar; charset=utf-8',
            'Content-Disposition' => 'attachment; filename=' . $ical->getFilename() . '.ics'
        ]);
    }
}