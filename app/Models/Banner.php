<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $guarded = [''];
    
    public function creator(){
        return $this->belongsTo(User::class,'id');
    }

    public function editor(){
        return $this->belongsTo(User::class,'id');
    }
    use HasFactory;
}
