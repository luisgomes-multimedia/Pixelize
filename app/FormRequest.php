<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormRequest extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phoneNumber'
    ];
}
