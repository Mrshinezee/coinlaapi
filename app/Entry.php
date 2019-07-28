<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    //
    protected $fillable = [
        'coin',
        'type',
        'exchange',
        'price',
        'quantity',
        'date',
        'time',
        'note',
    ];
}
