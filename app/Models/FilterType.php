<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilterType extends Model
{
    protected $guarded = [''];

    public function creator(){
        return $this->belongsTo(User::class,'fil_type_creator');
    }

    public function editor(){
        return $this->belongsTo(User::class,'fil_type_editor');
    }

    public function data(){
        return $this->hasMany(FilterData::class,'cat_data');
    }
    use HasFactory;
}
