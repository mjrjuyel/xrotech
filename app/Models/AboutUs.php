<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{

    public function editor(){
        return $this->belongsTo(user::class,'about_editor');
    }
    use HasFactory;
}
