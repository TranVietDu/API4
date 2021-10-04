<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classs extends Model
{
    use HasFactory;
    protected $table='class';
    public $timestamps= false;
    protected $fillable = [
        'id',
        'nameclass',
    ];
    public function student()
    {
        return $this->belongsToMany('App\Models\Student','class_student','class_id','student_id');
    }
}

