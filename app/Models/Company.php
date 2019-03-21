<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name','short_name', 'province', 'city','district','address', 'zip', 'avatar','manager','contact', 'phone', 'mobile','email','QQ', 'bank', 'account',
    ];

    public function user(){
        return $this->hasMany(User::class);
    }
}
