<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = ['title', 'description', 'local', 'remote', 'type', 'companyId'];

    function company() {
        return $this->belongsTo('App\Company');
    }
}
