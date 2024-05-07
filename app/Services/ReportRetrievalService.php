<?php

namespace App\Services;

use App\Models\Report;

class ReportRetrievalService
{
    public function getAllReport()
    {
        return Report::all();
    }
    public function getReportById($id)
    {
        return Report::find($id);
    }
    public function getReportByUserId($userId)
    {
        return Report::where('user_id', $userId)->get();
    }
    public function getReportByDepartmentId($departmentId)
    {
        return Report::where('department_id', $departmentId)->get();
    }
    public function getReportByBuildingId($buildingId)
    {
        return Report::where('building_id', $buildingId)->get();
    }
    public function getReportByRoomId($roomId)
    {
        return Report::where('room_id', $roomId)->get();
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
