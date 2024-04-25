<?php

namespace App\Http\Controllers;

use App\Models\ActivityLogs;
use App\Models\Attendance;
use App\Models\ExportData;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ExportController extends Controller
{
    public function export()
    {
        $export = new ExportData();

        // Fetch data from the database
        $data = Staff::select([
            'workers_id',
            'lastname',
            'firstname',
            'middlename',
            'type',
            'number',
            'email',
            'address',
        ])->where('is_deleted','=',NULL)->get()->toArray();

        // Create an instance of the ExportData class
        $export = new ExportData();

        // Call the exportToCsv method and pass the fetched data
        $export->exportToCsv($data, 'staff.csv');

        // Download the generated CSV file
        // Download the generated CSV file
        $log = new ActivityLogs();
        $log->user_id = auth()->user()->id;
        $log->activity = "User Generate Staff Reports";
        if ($log->save())
        return Response::download('staff.csv')->deleteFileAfterSend(true);
    }

    public function attendanceExport()
    {
        $export = new ExportData();

        // Fetch data from the database
        $data = Attendance::with('staff')->select([
            'workers_id',	
            'date',	
            'time_in',	
            'time_out',	
            'method',	
            'notes'
        ])->get()->toArray();

        // Create an instance of the ExportData class
        $export = new ExportData();
        // Call the exportToCsv method and pass the fetched data
        $export->attendanceexportToCsv($data, 'attendance.csv');

        // Download the generated CSV file
        $log = new ActivityLogs();
        $log->user_id = auth()->user()->id;
        $log->activity = "User Generate Attendance Reports";
        if ($log->save())
        return Response::download('attendance.csv')->deleteFileAfterSend(true);
        }
    
}
