<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Storage;
use Carbon;

class UploadWeb extends Model
{
    public function getProjectNameAttribute($value){
        if ($value == ''){
            return '';
        } else {
            return asset(Storage::url('upload_web_project/'.$value));
        }
    }

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
