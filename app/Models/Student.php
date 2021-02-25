<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name','surname','group_id', 'project_id'];
    use HasFactory;

    public function group () {
        return $this->belongsTo("App\Models\Group",'group_id','id');
    }
}
