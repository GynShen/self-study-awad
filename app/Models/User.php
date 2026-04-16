<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['name', 'email', 'password', "is_admin"];

    public function company() 
    {
        return $this->hasOne('App\Models\Company');
    }
}
