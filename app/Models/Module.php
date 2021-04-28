<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Module extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The guard of module
     * @var string
     */
    protected $guard_name = 'admin';


    /**
     * Get The Permissions to The Module
     */
    public function permssions()
    {
        return $this->hasMany(Permission::class);
    }
}
