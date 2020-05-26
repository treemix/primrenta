<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'medias';




    protected $fillable = [
        'url',
        'preview_url',
        'path',
        'type',
    ];

    protected $hidden = [ ];




}
