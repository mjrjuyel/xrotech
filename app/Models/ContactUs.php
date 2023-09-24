<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $guarded = [''];

    public function editor(){
        return $this->belongsTo(User::class,'id');
    }
    use HasFactory;
}
