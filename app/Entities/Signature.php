<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    protected $fillable = [
        'name', 'email', 'body'
    ];

    protected $dates = ['deleted_at'];
}
