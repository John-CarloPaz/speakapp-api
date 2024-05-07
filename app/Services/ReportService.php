<?php

namespace App\Services;

use App\Models\Report;

class ReportService
{
    public array $reportData;
    public function __construct($data)
    {
        $this->reportData = $data;
    }

    public function generateReport(): string
    {
        $uniqueId = uniqid();
        $filename = $this->reportData['user_id'] . '-' . $uniqueId .$this->reportData['filename']->extension();
        $path = storage_path('reports/' . $filename);
        file_put_contents($path);

        $report = new Report();
        $report->user_id = $this->reportData['user_id'];
        $report->title = $this->reportData['title'];
        $report->description = $this->reportData['description'];
        $report->file = $filename;
        $report->type = $this->reportData['type'];
        $report->status = $this->reportData['status'];
        $report->department_id = $this->reportData['department_id'];
        $report->building_id = $this->reportData['building_id'];
        $report->room_id = $this->reportData['room_id'];
        $report->save();

        return response()->json([
            'message' => 'Report created successfully',
            'report' => $report,
        ]);
    }
}
