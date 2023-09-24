<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    protected $guarded = [''];

    public function creator(){
        return $this->belongsTo(User::class,'port_creator');
    }

    public function editor(){
        return $this->belongsTo(User::class,'port_editor');
    }
    use HasFactory;
}
