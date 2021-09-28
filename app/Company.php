<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    protected $fillable = [
        'name', 'address', 'contact_number'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
