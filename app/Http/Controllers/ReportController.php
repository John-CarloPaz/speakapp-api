<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReportRequest;
use App\Services\ReportService;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function generateReport(ReportRequest $request): string
    {
        return (new ReportService($request->validated()))->generateReport();
    }
    public function getAllReports(): \Illuminate\Http\JsonResponse
    {
        return (new ReportService())->getAllReports();
    }

}
