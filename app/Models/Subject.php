<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //
    public function homework() {
        return $this->hasMany(Homework::class);
    }
}
