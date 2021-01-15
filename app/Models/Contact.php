<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function emails()
    {
        return $this->hasMany(Email::class,'contact_id','id');
    }

    public function numbers()
    {
        return $this->hasMany(Number::class,'contact_id','id');
    }

}