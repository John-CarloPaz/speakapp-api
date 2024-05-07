<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'file',
        'type',
        'status',
        'department_id',
        'building_id',
        'room_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
