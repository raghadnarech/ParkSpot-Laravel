<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'car_id',
        'slot_id',
        'Park_Type',
        'startTime_book',
        'endTime_book',
    ];

    protected $hidden=[
        'created_at',
        'updated_at'
    ];
}
