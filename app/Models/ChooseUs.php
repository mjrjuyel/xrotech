<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChooseUs extends Model
{
    protected $guarded = [''];

    public function creator(){
        return $this->belongsTo(User::class,'cho_creator');
    }

    public function editor(){
        return $this->belongsTo(User::class,'cho_editor');
    }
    public function choose(){
        return $this->belongsTo(ChooseMain::class,'cho_main');
    }
    use HasFactory;
}
