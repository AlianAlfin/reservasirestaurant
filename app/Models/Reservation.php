<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'telp',
        'reservation_date',
        'reservation_time',
        'table_id',
        'guestNumber'
    ];

    protected $dates = [
        'reservation_date',
        'reservation_time'
    ];

    public function table()
    {
        return $this->belongsTo(table::class);
    }

    use HasFactory;
}