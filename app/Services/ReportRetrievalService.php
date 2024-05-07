<?php

namespace App\Services;

use App\Models\Report;

class ReportRetrievalService
{
    public function getAllReports()
    {
        return Report::all();
    }
    public function getReportByUserId($userId)
    {
        return Report::where('user_id', $userId)->get();
    }
    public function getReportByDepartment($department)
    {
        return Report::where('department', $department)->get();
    }
    public function getReportByBuilding($building)
    {
        return Report::where('building', $building)->get();
    }
    public function getReportByRoom($room)
    {
        return Report::where('room', $room)->get();
    }
    public function getReportByType($type)
    {
        return Report::where('type', $type)->get();
    }
    public function getReportByStatus($status)
    {
        return Report::where('status', $status)->get();
    }
    public function getReportByTypeAndStatus($type, $status)
    {
        return Report::where('type', $type)->where('status', $status)->get();
    }
}
