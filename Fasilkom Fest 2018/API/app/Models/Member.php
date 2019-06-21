<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Storage;

class Member extends Model
{
    public function getImageStudentCardAttribute($value){
        if ($value == ''){
            return '';
        } else {
            return asset(Storage::url('member_image/'.$value));
        }
    }
}
