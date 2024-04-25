<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExportData extends Model
{
    use HasFactory;
  
    public function exportToCsv($data, $filename)
    {
        $filteredData = [];

        // Define the desired order of columns
        $columns = [  
        'workers_id',
        'lastname',
        'firstname',
        'middlename',
        'type',
        'number',
        'email',
        'address',
        ];

        foreach ($data as $item) {
            // Filter out the unwanted fields
            $filteredItem = array_intersect_key($item, array_flip($columns));
            $filteredData[] = $filteredItem;
        }

        $file = fopen($filename, 'w');

        // Write headers
        fputcsv($file, $columns);

        // Write data
        foreach ($filteredData as $row) {
            fputcsv($file, $row);
        }

        fclose($file);
    }

    public function attendanceexportToCsv($data, $filename)
    {
        $filteredData = [];

        // Define the desired order of columns
        $columns = [
            'workers_id' => 'Workers ID',
            'staff.lastname' => 'Last Name',
            'staff.firstname' => 'First Name',
            'staff.middlename' => 'Middle Name',
            'date' => 'Date',
            'time_in' => 'Time In',
            'time_out' => 'Time Out',
            'method' => 'Method',
            'notes' => 'Notes',
           
        ];

        foreach ($data as $item) {
            // Flatten the related staff data
            if (isset($item['staff'])) {
                  $item['staff.firstname'] = $item['staff']['firstname'];
                $item['staff.middlename'] = $item['staff']['middlename'];
                $item['staff.lastname'] = $item['staff']['lastname'];
                unset($item['staff']);
            }

             // Rearrange data according to the order of columns
             $row = [];
             foreach ($columns as $key => $value) {
                 $row[$value] = $item[$key] ?? '';
             }
 
             $filteredData[] = $row;
        }
        $file = fopen($filename, 'w');

        // Write bold headers
        fputcsv($file, array_values($columns), ',', '"');

        // Write data
        foreach ($filteredData as $row) {
            fputcsv($file, $row);
        }

        fclose($file);
    }


}
