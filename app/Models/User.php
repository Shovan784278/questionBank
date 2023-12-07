<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email', 'password', 'mobile', 'otp'];

    public function subject(){

        return $this->hasOne(Subject::class);
    }


    protected $attributes = [

        'otp' => '0'

    ];

    use HasFactory;
}
