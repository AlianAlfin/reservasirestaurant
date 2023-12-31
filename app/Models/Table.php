<?php

namespace App\Models;

use App\Enums\TableStatus;
use App\Enums\TableLocation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $guarded = [
        'id'
    ];

    //    protected $casts = [
    //         'status' => TableStatus::class,
    //         'location' => TableLocation::class,
    //     ]; 

    public function reservations()
    {
        return $this->hasMany(reservation::class);
    }
    use HasFactory;
}
