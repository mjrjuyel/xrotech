<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{

    protected $guarded = [''];

    public function creator(){
        return $this->belongsTo(User::class,'tech_creator');
    }
    public function editor(){
        return $this->belongsTo(User::class,'tech_editor');
    }
    use HasFactory;
}
