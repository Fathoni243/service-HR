<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hierarchy extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nama',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */
    protected $hidden = [];

    public function users()
    {
        return $this->hasMany(User::class, 'hierarchy_Id');
    }
}
