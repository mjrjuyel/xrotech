<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class process extends Model
{
    protected $guarded = [''];

    public function creator(){
        return $this->belongsTo(User::class,'pro_creator');
    }

    public function editor(){
        return $this->belongsTo(User::class,'pro_editor');
    }
    use HasFactory;
}
