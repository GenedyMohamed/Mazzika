<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $fillable = ['name', 'link'];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
