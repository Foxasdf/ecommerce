<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;


    public function favoritable(){
       
        return $this->morphTo('favoritable');
    }

    public function clients(){
       
        return $this->belongsTo(Client::class);
    }

}