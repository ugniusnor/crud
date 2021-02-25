<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    //mass assigment
    protected $fillable=['project_name','groups_number','students_per_group'];


    //elequent

    public function groups () {
        return $this->hasMany("App\Models\Group",'project_id','id');
    }

    public function students () {
        return $this->hasMany("App\Models\Student",'project_id','id');
    }
    
}
