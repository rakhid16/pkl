<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Storage;

class BuktiPembayaran extends Model
{
    public function getImageAttribute($value){
        if ($value == ''){
            return '';
        } else {
            return asset(Storage::url('bukti_pembayaran_image/'.$value));
        }
    }
}
