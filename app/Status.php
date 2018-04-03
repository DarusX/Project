<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = [
        'status', 'color'
    ];

    public function projects(){
        return $this->hasMany(Project::class);
    }
}
