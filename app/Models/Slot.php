<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Zone;


class Slot extends Model
{
    use HasFactory;
    public function Zone()
    {
    	return $this->belongsTo(Zone::class);
    }
}
