<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GetTouch extends Model
{

    public function creator(){
        return $this->belongsTo(User::class,'get_creator');
    }

    public function editor(){
        return $this->belongsTo(User::class,'get_editor');
    }
    
    use HasFactory;
}
