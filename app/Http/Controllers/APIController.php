<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\ExportData;
use App\Models\Logs;
use App\Models\Staff;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class APIController extends Controller
{
    public function index(Request $req)
    {
        $id = $req->input("workersID");

        $staff = Staff::where('workers_id', $id)->first();
        $addlog = new Logs();


        $dates = date('H:i:s');

        $attendance = Attendance::where('workers_id', $staff->id)->orderBy('id', 'desc')->first();
        $data = new Attendance();
        if ($attendance) { //MAY LAM;N
            if ($attendance->date == date('Y-m-d')) {
                if (!$attendance->time_out) {
                    $update = Attendance::where('workers_id', $staff->id)->orderBy('id', 'desc')->first();
                    $update->time_out = $dates;
                    $update->method = 'QRCode';
                    $update->notes = '';

                    if ($update->update()) {
                        $addlog->workers_id = $staff->id;
                        $addlog->date = date('Y-m-d');
                        $addlog->time = $dates;
                        $addlog->method = 'QRCode';
                        $addlog->status = 'Time Out';
                        if ($addlog->save()) {
                            $log = Logs::with('staff')->where('date','=',date('Y-m-d'))->orderBy('id','desc')->limit(3)->get();
                            return ['msg' => 'Attendance Time Out Successfully!', 'attendance' => Attendance::all(), 'status' => 100, 'staff' => $staff, 'log' => $log];
                        }
                    }
                }
            } else {
                $infos = new Attendance();
                $infos->workers_id = $staff->id;
                $infos->date = date('Y-m-d');
                $infos->time_in = $dates;
                $infos->method = 'QRCode';
                $infos->notes = '';
                if ($infos->save()) {

                    $addlog->workers_id = $staff->id;
                    $addlog->date = date('Y-m-d');
                    $addlog->time = $dates;
                    $addlog->method = 'QRCode';
                    $addlog->status = 'Time In';
                    if ($addlog->save()) {
                        $log = Logs::with('staff')->where('date','=',date('Y-m-d'))->orderBy('id','desc')->limit(3)->get();

                        return ['msg' => 'Attendance Time In Successfully!', 'attendance' => Attendance::all(), 'status' => 200, 'staff' => $staff, 'log' => $log];
                    }
                }
            }
        } else { //ADD THE DATA IN THE ATTENDANCE
            $data->workers_id = $staff->id;
            $data->date = date('Y-m-d');
            $data->time_in = $dates;
            $data->method = 'QRCode';
            $data->notes = '';
            if ($data->save()) {
                $addlog->workers_id = $staff->id;
                $addlog->date = date('Y-m-d');
                $addlog->time = $dates;
                $addlog->method = 'QRCode';
                $addlog->status = 'Time In';
                if ($addlog->save()) {
                    $log = Logs::with('staff')->where('date','=',date('Y-m-d'))->orderBy('id','desc')->limit(3)->get();

                    return ['msg' => 'Attendance Time In Successfully!', 'attendance' => Attendance::all(), 'status' => 200, 'staff' => $staff, 'log' => $log];
                }
            }
        }
        $log = Logs::with('staff')->where('date','=',date('Y-m-d'))->orderBy('id','desc')->limit(3)->get();

        return ['msg' => 'Attendance Already Time Out!', 'attendance' => Attendance::all(), 'status' => 300, 'staff' => $staff, 'log' => $log];
    }

    public function attendees(){
        return ['log'=>Logs::with('staff')->where('date','=',date('Y-m-d'))->orderBy('id','desc')->limit(3)->get()];
    }

    
}
