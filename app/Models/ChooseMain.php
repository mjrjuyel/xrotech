<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChooseMain extends Model
{

    public function creator(){
        return $this->belongsTo(User::class,'cho_main_creator');
    }
    public function editor(){
        return $this->belongsTo(User::class,'cho_main_editor');
    }
    public function Cho_type(){
        return $this->hasMany(ChooseUs::class,'id');
    }
    use HasFactory;
}
