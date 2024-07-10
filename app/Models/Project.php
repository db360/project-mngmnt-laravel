<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function tasks(){
        // A project cant contain many Tasks
        return $this->hasMany(Task::class);
    }
}
