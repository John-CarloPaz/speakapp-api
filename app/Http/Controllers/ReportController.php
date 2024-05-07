<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReportRequest;
use App\Http\Resources\ReportResource;
use App\Services\ReportRetrievalService;
use App\Services\ReportService;

class ReportController extends Controller
{
    //GET
    private ReportRetrievalService $reportRetrievalService;

    public function __construct(ReportRetrievalService $reportRetrievalService)
    {
        $this->reportRetrievalService = $reportRetrievalService;
    }
    public function getAllReports()
    {
        return ReportResource::collection($this->reportRetrievalService->getAllReports());
    }
    public function getReportByUserId($id)
    {
        return ReportResource::collection($this->reportRetrievalService->getReportByUserId($id));
    }
    public function getReportByDepartment($department)
    {
        return ReportResource::collection($this->reportRetrievalService->getReportByDepartment($department));
    }
    public function getReportByBuilding($building)
    {
        return ReportResource::collection($this->reportRetrievalService->getReportByBuilding($building));
    }
    public function getReportByRoom($room)
    {
        return ReportResource::collection($this->reportRetrievalService->getReportByRoom($room));
    }
    public function getReportByType($type)
    {
        return ReportResource::collection($this->reportRetrievalService->getReportByType($type));
    }
    public function getReportByStatus($status)
    {
        return ReportResource::collection($this->reportRetrievalService->getReportByStatus($status));
    }

    //UPDATE, DELETE, CREATE
    public function generateReport(ReportRequest $request)
    {
        return (new ReportService($request->validated()))->generateReport();
    }
}
