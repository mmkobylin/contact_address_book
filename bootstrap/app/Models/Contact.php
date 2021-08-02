<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        "salutation",
        "first_name",
        "middle_name",
        "last_name",
        "date_of_birth",
        "address",
        "city",
        "postcode",
        "tel",
        "email"
    ];

    use HasFactory;

    public function fullName()
    {
        return "{$this->first_name} {$this->middle_name} {$this->last_name}";
    }

    public function fullAddress() 
    {
        return "{$this->address} {$this->city} {$this->postcode}";
    }

    
}
