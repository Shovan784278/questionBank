<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $fillable = ['title','subject_id','user_id'];

    public function subject(){

        return $this->belongsTo('Subject::class');
    }

//    public function question(){
//
//        return $this->belongsTo('Question::class');
//    }

    use HasFactory;
}
