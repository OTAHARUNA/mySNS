<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendar\CalendarView;
use Carbon\Carbon;
use App\User;
use Auth;

class StudentController extends Controller
{
    //
    public function index()
    {
        //$time = Carbon::now(); 時間含む日付表示
        $day = date('n/j');
        return view('student.attendance',compact('day'));
    }
   public function show()
   {
       $calendar = new CalendarView(time());
       return view('student.reservation', [
           "calendar" => $calendar
           ]);
    }
    public function mylist()
    {
        return view('/student.mylist');
    }

}
