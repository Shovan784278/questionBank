<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{

    protected $fillable = ['name'];

    public function chapter(){

        return $this->hasMany(Chapter::class);
    }

    public function user(){

        return $this->belongsTo(User::class);
    }

    use HasFactory;
}
