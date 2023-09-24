<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcessMain extends Model
{
    
    public function creator(){
        return $this->belongsTo(User::class,'pro_main_creator');
    }
    public function editor(){
        return $this->belongsTo(User::class,'pro_main_editor');
    }
    public function pro_type(){
        return $this->hasMany(Process::class,'pro_main','id');
    }
    use HasFactory;
}
