<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turn extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'days',
        'hour',
    ];

    public function reservation()
    {
        return $this->hasOne(Reservation::class);
    }
}
