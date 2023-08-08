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
        "memo",
        "user_id"
    ];

    protected $dates = [
        'created_at',
        'departure_time',
        'arrival_time',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
