<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $fillable = ['project_id'];
    public function project () {
        return $this->hasOne("App\Models\Project",'project_id','id');
    }
}
