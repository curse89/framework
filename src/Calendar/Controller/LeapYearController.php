<?php

namespace App\Calendar\Controller;

use App\Calendar\Model\LeapYear;
use Symfony\Component\HttpFoundation\Request;

class LeapYearController
{
    public function index(Request $request, $year): string
    {
        $leapYear = new LeapYear();
        if ($leapYear->isLeapYear($year)) {
            return 'Yep, this is a leap year! ';
        }

        return 'Nope, this is not a leap year.';
    }
}