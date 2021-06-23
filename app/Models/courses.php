<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class courses extends Model
{
    use HasFactory, Notifiable;
    public $timestamps = false;

    public function CoursesUser(){
        return $this->belongsToMany(User::class);
    }

    public function CoursesStudent(){
        return $this->belongsToMany(students::class);
    }
}
