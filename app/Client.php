<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'names',
        'lastnames',
        'email',
        'email_verified_at',
        'gender_id',
        'country_id',
        'department_id',
        'document_id',
        'city_id',
        'password'
    ];
}
