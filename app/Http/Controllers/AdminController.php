<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use Auth;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        # 追加したmiddlewareを追加。
        $this->middleware('admin');
    }

    public function index()
    {
        $day = date('n/j');
        //dd($day);
        return view('admin.admin',compact('day'));
    }
    public function show()
    {
        $day = date('n/j');
        return view('admin.chart',compact('day'));
    }

}
