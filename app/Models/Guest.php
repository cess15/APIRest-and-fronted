<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'reservation_id',
        'name',
        'lastname',
        'mothers_lastname',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
}
