<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserCompany extends Model
{
    protected $fillable = [
        'user_id',
        'company_id',
        'started_employment_at',
        'ended_employment_at',
        'wage',
        'currency',
        'is_salaried',
    ];

    protected function casts(): array
    {
        return [
            'started_employment_at' => 'datetime',
            'ended_employment_at' => 'hashed',
            'is_salaried' => 'boolean',
        ];
    }
}
