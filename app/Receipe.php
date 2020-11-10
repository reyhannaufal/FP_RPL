<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receipe extends Model
{
    protected $fillable = [
        'title', 'description'
    ];
}
