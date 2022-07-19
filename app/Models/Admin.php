<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Hash;

class Admin extends Model
{
    use HasFactory;

    /*--------- Const Variables ---------*/

    const AVATAR_PATH = 'uploads/admins/avatar/';

    /*------------ Variables ------------*/

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'admins';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'family',
        'username',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
    ];


    /*------------ Relations ------------*/

    public function phones(): MorphMany
    {
        return $this->morphMany(Phone::class, 'phoneable');
    }

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany('roles');
    }


    /*-------------- Scopes -------------*/



    /*---------- Other Functions --------*/



    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    public function getFullName(): string
    {
        if ($this->name && $this->family) {
            return $this->name . ' ' . $this->family;
        }
        return 'بدون نام';
    }



}
