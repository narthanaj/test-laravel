<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    protected $table='blog';

    protected $fillable=[

    'title',
    'body',


];

}
