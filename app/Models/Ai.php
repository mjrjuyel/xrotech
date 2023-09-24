<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ai extends Model
{
    protected $guarded = [''];

    public function creator(){
        return $this->belongsTo(User::class,'ai_creator');
    }
    public function editor(){
        return $this->belongsTo(User::class,'ai_editor');
    }
    public function aimain(){
        return $this->belongsTo(User::class,'ai_main');
    }
    use HasFactory;
}
