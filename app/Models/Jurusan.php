<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $fillable =[
        'id',
        'desc_cat',
        'name_cat'
        ];
        protected $attributes = [
            'name_cat' => 'Default Name',
        ];
        
}
