<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classs extends Model
{
              use HasFactory;

              protected $table = 'classes';
              protected $fillable = ['name', 'description'];

              /**
               * Get the students for the class.
               */
              public function students()
              {
                            return $this->hasMany(Student::class, 'class_id');
              }
}
