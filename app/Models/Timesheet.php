<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model
{
    protected $fillable = [
        'user_id',
        'company_id',
        'user_location_id',
        'shift_started_at',
        'shift_ended_at',
        'unpaid_breaks_duration',
    ];

    protected function casts(): array
    {
        return [
            'shift_started_at' => 'datetime',
            'shift_ended_at' => 'datetime',
        ];
    }
}
