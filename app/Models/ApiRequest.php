<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiRequest extends Model
{
    use HasFactory,HasUuids;
    protected $table = 'api_requests';
    protected $fillable = [
        'database',
        'device_id',
        'temperature_1',
        'temperature_2',
        'fan_status_1',
        'fan_status_2',
        'fan_status_3',
        'heater_status',
        'oven_time'
    ];

}
