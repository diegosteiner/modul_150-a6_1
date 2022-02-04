<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //
    public function homework() {
        return $this->hasMany(Homework::class);
    }
}
