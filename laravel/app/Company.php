<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['tradingName', 'website', 'logo', 'userId'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function jobs()
    {
        return $this->hasMany('App\Job');
    }
}
