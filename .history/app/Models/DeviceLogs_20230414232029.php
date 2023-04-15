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


    protected $dates = [
      'start_session_at',
      'end_session_at'
  ];

    protected $casts = [
    'start_session_at'=> 'datetime:Y-m-d',
    'end_session_at'=> 'datetime:Y-m-d'
];

}
