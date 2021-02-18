<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $fillable = ['project_id', 'group_number'];
    public function project () {
        return $this->belongsTo("App\Models\Project",'project_id','id');
    }

    public function students () {
        return $this->hasMany("App\Models\Student",'group_id','id');
    }
}
