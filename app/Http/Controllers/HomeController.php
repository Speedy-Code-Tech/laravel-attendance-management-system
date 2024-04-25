<?php

namespace App\Http\Controllers;

use App\Models\ActivityLogs;
use App\Models\Attendance;
use App\Models\Logs;
use App\Models\Staff;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $staff = Staff::count();

        $date = Carbon::now()->format('Y-m-d');

        $present = Attendance::where('date',$date)->count();
        $pending = $staff-$present;
        $attendance = Logs::with('staff')->where('date','=',$date)->orderBy('id','desc')->get();
        $logs = ActivityLogs::with('user')->orderBy('id','desc')->get();

        return view('home', compact('staff','present','pending','attendance','logs'));
    }
}
