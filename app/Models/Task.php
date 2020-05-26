<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Task extends Model
{
    protected $table = 'tasks';




    protected $fillable = [
        'name', 'slug', 'description',


        'dimensions_weight',
        'dimensions_length',
        'dimensions_width',
        'dimensions_height',
        'cargo_cost',
        'return_payment',
        'payment',
        'courier_transport',

    ];

    protected $hidden = [ ];



}


//Payment type: 1: payment_by_check, 2: payment_by_prepayment
//courier_transport type: 1: never_mind, 2: by_passenger_car, 3: by_truck
//date_type: 1: need_start_date, 2: need_end_date, 3: need_period_date
