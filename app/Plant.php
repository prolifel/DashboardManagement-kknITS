<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    protected $fillable = [
        'name', 'scientific_name', 'family', 'chemical_content', 'usability', 'image'
    ];
}
