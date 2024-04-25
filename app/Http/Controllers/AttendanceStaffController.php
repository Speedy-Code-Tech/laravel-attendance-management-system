<?php

namespace App\Http\Controllers;

use App\Models\ActivityLogs;
use App\Models\Attendance;
use App\Models\Logs;
use App\Models\Staff;
use Illuminate\Http\Request;

class AttendanceStaffController extends Controller
{
    public function index()
    {
        $attendance = Attendance::with('staff')->orderBy('date','desc')->get();
        return view('attendance.index', compact('attendance'));
    }

    public function create()
    {
        $ids = Staff::get();
        return view('attendance.create', compact('ids'));
    }

    public function store(Request $req)
    {
        $req->validate([
            'id' => 'required',
            'time' => 'required',
        ]);
        $attendance = Attendance::where('workers_id', $req->input('id'))->orderBy('id', 'desc')->first();
        $data = new Attendance();
        $addlog = new Logs();
        if ($attendance) { //MAY LAMAN
            if ($attendance->date == date('Y-m-d')) {
                if (!$attendance->time_out) {
                    $update = Attendance::where('workers_id', $req->input('id'))->orderBy('id', 'desc')->first();
                    $update->time_out = $req->input('time') . ':00';
                    $update->method = 'Manual';
                    $update->notes = $req->input('notes');

                    if ($update->update()) {
                        $addlog->workers_id = $req->input('id');
                        $addlog->date = date('Y-m-d');
                        $addlog->time = $req->input('time') . ':00';
                        $addlog->method = 'Manual';
                        $addlog->status = 'Time Out';
                        if ($addlog->save()) {
                            $log = new ActivityLogs();
                            $log->user_id = auth()->user()->id;
                            $log->activity = "Manual Attendance Time Out - " . Staff::where('id',$req->input('id'))->first()->workers_id;
                            if ($log->save())
                                return redirect(route('attendance.staff.index'))->with('msg', 'Attendance Time Out Successfully!');
                        }
                    }
                }
            } else {
                $data->workers_id = $req->input('id');
                $data->date = date('Y-m-d');
                $data->time_in = $req->input('time') . ':00';
                $data->method = 'Manual';
                $data->notes = $req->input('notes');
                if ($data->save()) {
                    $addlog->workers_id = $req->input('id');
                    $addlog->date = date('Y-m-d');
                    $addlog->time = $req->input('time') . ':00';
                    $addlog->method = 'Manual';
                    $addlog->status = 'Time In';
                    if ($addlog->save()) {

                        $log = new ActivityLogs();
                        $log->user_id = auth()->user()->id;
                        $log->activity = "Manual Attendance Time In - " . Staff::where('id',$req->input('id'))->first()->workers_id;
                        if ($log->save())
                            return redirect(route('attendance.staff.index'))->with('msg', 'Attendance Time In Successfully!');
                    }
                }
            }
        } else { //ADD THE DATA IN THE ATTENDANCE
            $data->workers_id = $req->input('id');
            $data->date = date('Y-m-d');
            $data->time_in = $req->input('time') . ':00';
            $data->method = 'Manual';
            $data->notes = $req->input('notes');
            if ($data->save()) {
                $addlog->workers_id = $req->input('id');
                $addlog->date = date('Y-m-d');
                $addlog->time = $req->input('time') . ':00';
                $addlog->method = 'Manual';
                $addlog->status = 'Time In';
                if ($addlog->save()) {
                    $log = new ActivityLogs();
                    $log->user_id = auth()->user()->id;
                    $log->activity = "Manual Attendance Time In - " . Staff::where('id',$req->input('id'))->first()->workers_id;
                    if ($log->save())
                        return redirect(route('attendance.staff.index'))->with('msg', 'Attendance Added Successfully!');
                }
            }
        }

        return redirect(route('attendance.staff.index'))->with('msg', 'Attendance Already Time Out!');
    }
}
