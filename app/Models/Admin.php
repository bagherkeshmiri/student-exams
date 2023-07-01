<?php

namespace App\Models;

use App\Enums\Questions\QuestionStatus;
use Morilog\Jalali\Jalalian;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Admin extends Authenticatable
{
    /*--------- Const Variables ---------*/

    public const TABLE_NAME = 'admins';
    public const AVATAR_PATH = 'uploads/admins/avatar/';
    public const COLUMN_ID = 'id';
    public const COLUMN_ROLE_ID = 'role_id';
    public const COLUMN_ADMIN_ID = 'admin_id';

    /*------------ Variables ------------*/

    protected $table = self::TABLE_NAME;
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
        return $this->belongsToMany(Role::class, 'admin_role', self::COLUMN_ADMIN_ID, self::COLUMN_ROLE_ID);
    }

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class, self::COLUMN_ADMIN_ID, self::COLUMN_ID);
    }

    public function answeredQuestions(): HasMany
    {
        return $this->hasMany(Question::class, self::COLUMN_ADMIN_ID, self::COLUMN_ID)->where('status', QuestionStatus::Answered);
    }

    /*-------------- Scopes -------------*/

    /*---------- Other Functions --------*/

    public function getJalaliCreatedAt(): string
    {
        return Jalalian::forge($this->created_at)->format('Y/m/d H:i:s');
    }

    public function setPasswordAttribute($value): void
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

    public function hasPermission($permission): bool
    {
        return $this->roles->first()->permissions->contains('en_name', $permission->en_name);
    }
}
