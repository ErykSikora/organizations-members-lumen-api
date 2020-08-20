<?php

namespace App;

// use Illuminate\Auth\Authenticatable;
// use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
// use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
// use Laravel\Lumen\Auth\Authorizable;

class Parish extends Model
{

    protected $fillable = [
        'id', 'license', 'name', 'metropolis', 'street', 'postal', 'city', 'country', 'rector', 'avatar', 'phone', 'email', 'cert', 'donations', 'metropolis', 'payment_id', 'crc', 'account', 'background', 'status', 'type'
    ];

    public $table = 'parishes';
    public $incrementing = false;
    public $timestamps = false;

}
