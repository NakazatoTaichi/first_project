<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        "going_out",
        "dinner",
        "departure_time",
        "arrival_time",
        "memo"
    ];
}
