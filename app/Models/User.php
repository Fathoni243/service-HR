<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model 
{

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'department_Id',
        'hierarchy_Id',
        'password',
        'username', 
        'email', 
        'nik', 
        'jabatan', 
        'contact',
        'alamat',
        'tanggal_masuk',
        'salary',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */
    protected $hidden = [
        'department_Id',
        'hierarchy_Id',
        'password'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_Id');
    }

    public function hierarchy()
    {
        return $this->belongsTo(Hierarchy::class, 'hierarchy_Id');
    }
}
