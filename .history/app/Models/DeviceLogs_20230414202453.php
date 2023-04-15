<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceLogs extends Model
{
    use HasFactory;

    public $fillable = [
        'machine_name',
        'session',
        'patrimony',
        'location'
    ];

    public $dates = [
      'start_session',
      'end_session'
    ];
}
