<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory;

    /*--------- Const Variables ---------*/


    /*------------ Variables ------------*/

    protected $table = 'roles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [];


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [];



    /*------------ Relations ------------*/

    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class,'role_permission');
    }


    public function admins(): BelongsToMany
    {
        return $this->belongsToMany(Admin::class,'admin_role');
    }

    /*-------------- Scopes -------------*/



    /*---------- Other Functions --------*/

}
