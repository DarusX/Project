<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'project', 'description', 'status_id'
    ];

    public function status(){
        return $this->belongsTo(Status::class);
    }
    public function features(){
        return $this->hasMany(Feature::class);
    }
}
