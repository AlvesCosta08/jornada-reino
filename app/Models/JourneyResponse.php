<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JourneyResponse extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'station_id',
        'option_index',
        'session_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
