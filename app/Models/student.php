<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'id';
   protected $fillable = [
        'fname',
        'mname',
        'lname',
        'address',
        'date_of_birth',
        'contact_number'
    ];
}
