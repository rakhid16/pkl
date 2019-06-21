<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Carbon;

class AnswerCsoTeam extends Model
{
    public function getCreatedAtAttribute($value){
        if ($value == ''){
            return '';
        } else {
        	$parse = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$value);
        	$parse = $parse->addHours(7);
            return $parse->toDateTimeString();
        }
    }
}
