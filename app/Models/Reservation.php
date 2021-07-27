<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'turn_id',
    ];

    public function convertDateWithoutTimeZone($date)
    {
        setLocale(LC_ALL, 'spanish_ecuador.utf-8');
        $myDate = str_replace("/", "-", $date);
        $newDate = date('d-m-Y H:i:s', strtotime($myDate));
        return strftime('%A, %d de %B del %Y', strtotime($newDate));
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function turn()
    {
        return $this->belongsTo(Turn::class);
    }
}
