<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aiMain extends Model
{
    public function creator(){
        return $this->belongsTo(User::class,'ai_main_creator');
    }
    public function editor(){
        return $this->belongsTo(User::class,'ai_main_editor');
    }
    public function ai_type(){
        return $this->hasMany(Ai::class,'ai_main','id');
    }
    use HasFactory;
}
