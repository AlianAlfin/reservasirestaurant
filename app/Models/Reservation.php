<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = [
        'id'
    ];



    public function table()
    {
        return $this->belongsTo(table::class);
    }

    use HasFactory;
}
