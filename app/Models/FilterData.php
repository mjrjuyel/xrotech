<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilterData extends Model
{
    protected $guarded = [''];

    public function creator(){
        return $this->belongsTo(User::class,'fil_creator');
    }

    public function editor(){
        return $this->belongsTo(User::class,'fil_editor');
    }
    public function category(){
        return $this->belongsTo(FilterType::class,'fil_cat',);
    }
    use HasFactory;
}
