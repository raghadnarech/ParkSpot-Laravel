<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Slot;

class Zone extends Model
{
    use HasFactory;
    public function Slot(){
        return $this->hasMany(Slot::class);
     }
}
