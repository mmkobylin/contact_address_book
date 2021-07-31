<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str; 

class Contact extends Model
{
    use HasFactory;

    public function show() 
    {
        return Str::limit($this->first_name, 20);
    }

    protected $fillable = [
        "first_name",
        "middle_name",
        "last_name",
        "date_of_birth",
        "address",
        "city",
        "postcode",
        "tel",
        "email",
    ];

}


