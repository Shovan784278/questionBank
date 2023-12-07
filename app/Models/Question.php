<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['subject_id','chapter_id','content','type', 'question_type'];

    public function subjects(){

        return $this->belongsTo(Subject::class);
    }

    public function chapters(){

        return $this->belongsTo(Chapter::class);
    }
    use HasFactory;


}
