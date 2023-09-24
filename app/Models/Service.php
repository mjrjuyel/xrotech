<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = [''];

    public function creator(){
        return $this->belongsTo(User::class,'ser_creator');
    }
    public function editor(){
        return $this->belongsTo(User::class,'ser_editor');
    }
    use HasFactory;
}
