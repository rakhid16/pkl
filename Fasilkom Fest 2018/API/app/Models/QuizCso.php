<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Storage;

class QuizCso extends Model
{
    public function getImageAttribute($value){
        if ($value == ''){
            return '';
        } else {
            return asset(Storage::url('quiz_cso_image/'.$value));
        }
    }
}
