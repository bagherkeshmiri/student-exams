<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Permission extends Model
{
    use HasFactory;

    /*--------- Const Variables ---------*/


    /*------------ Variables ------------*/

    protected $table = 'permissions';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fa_name',
        'en_name',
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

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class,'role_permission');
    }

    /*-------------- Scopes -------------*/


    /*---------- Other Functions --------*/

}
