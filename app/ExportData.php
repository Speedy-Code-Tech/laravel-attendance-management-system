<?php

namespace App;

use App\Models\ExportData as ModelsExportData;

class ExportData
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function export()
{
    $export = new ModelsExportData();

    $data = [
        ['name' => 'John', 'email' => 'john@example.com'],
        ['name' => 'Jane', 'email' => 'jane@example.com'],
    ];

    $export->exportToCsv($data, 'export.csv');

    return response()->download('export.csv')->deleteFileAfterSend(true);
}
}
