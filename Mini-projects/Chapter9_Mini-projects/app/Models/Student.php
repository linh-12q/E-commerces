<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'class_id'];

    /**
     * Get the class that the student belongs to.
     */
    public function classs()
    {
        return $this->belongsTo(Classs::class, 'class_id');
    }
}
