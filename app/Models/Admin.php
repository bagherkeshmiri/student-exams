<?php

namespace App\Models;

use Morilog\Jalali\Jalalian;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Admin extends Authenticatable
{
    /*--------- Const Variables ---------*/

    const AVATAR_PATH = 'uploads/admins/avatar/';

    /*------------ Variables ------------*/

    protected $table = 'admins';
    protected string $guard = 'admin';
    protected $perPage = 10;

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /*------------ Relations ------------*/

    public function phones(): MorphMany
    {
        return $this->morphMany(Phone::class, 'phoneable');
    }

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'admin_role');
    }

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }

    public function answeredQuestions(): HasMany
    {
        return $this->hasMany(Question::class)->where('status', Question::ANSWERED);
    }

    /*-------------- Scopes -------------*/


    /*---------- Other Functions --------*/

    public function getJalaliCreatedAt(): string
    {
        return Jalalian::forge($this->created_at)->format('Y/m/d H:i:s');
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    public function getFullNameAttribute(): string
    {
        if ($this->name && $this->family) {
            return $this->attributes['full_name'] = $this->name . ' ' . $this->family;
        }
        return $this->attributes['full_name'] = 'بدون نام';
    }

    public function hasPermission($permission)
    {
        return $this->roles->first()->permissions->contains('en_name', $permission->en_name);
    }
}
