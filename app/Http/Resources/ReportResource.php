<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReportResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'user_id' => $this->user_id,
            'id' => $this->id,
            'title' => $this->name,
            'description' => $this->description,
            'file' => $this->file,
            'type' => $this->type,
            'status' => $this->status,
            'department' => $this->department,
            'building' => $this->building,
            'room' => $this->room,
            'created_at' => $this->created_at,
        ];
    }
}
