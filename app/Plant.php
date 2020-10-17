<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'name', 'scientific_name', 'family', 'chemical_content', 'usability', 'image'
    ];
}
