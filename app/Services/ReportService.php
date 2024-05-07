<?php

namespace App\Services;

use App\Models\Report;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;

class ReportService
{
    public array $reportData;
    public function __construct($data)
    {
        $this->reportData = $data;
    }

    public function generateReport(): JsonResponse
    {
        $uniqueId = uniqid();
        $extension = $this->reportData['file']->extension();
        $filename = $this->reportData['user_id'] . '-' . $uniqueId . '.' . $extension;
        Storage::disk('public')->put('reports/' . $filename, $this->reportData['file']->getContent());

        $report = new Report();
        $report->fill([
            'user_id' => $this->reportData['user_id'],
            'title' => $this->reportData['title'],
            'description' => $this->reportData['description'],
            'file' => $filename,
            'type' => $this->reportData['type'],
            'department' => $this->reportData['department'],
            'building' => $this->reportData['building'],
            'room' => $this->reportData['room'],
            'status' => $this->reportData['status'],
        ]);
        $report->save();

        return response()->json([
            'message' => 'Report created successfully',
            'report' => $report,
        ]);
    }
}
