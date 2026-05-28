<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table = 'employees';
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
