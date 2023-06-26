<?php

namespace App\Models;

use App\Enums\Users\Userlevel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Morilog\Jalali\Jalalian;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;
    use SoftDeletes;

    /*--------- Const Variables ---------*/

    public const TABLE_NAME = 'users';
    public const COLUMN_ID = 'id';
    public const COLUMN_USER_ID = 'id';
    public const AVATAR_PATH = 'uploads/users/avatar/';

    /*------------ Variables ------------*/

    protected $table = self::TABLE_NAME;
    protected string $guard = 'user';
    protected $perPage = 10;

    protected $casts = [
        'level' => Userlevel::class,
    ];

    /*------------ Relations ------------*/


    public function phones(): MorphMany
    {
        return $this->morphMany(Phone::class, 'phoneable');
    }


    public function questions(): BelongsToMany
    {
        return $this->belongsToMany(Question::class, 'users_questions', self::COLUMN_USER_ID, self::COLUMN_ID);
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

    public function setNameAttribute($value): void
    {
        $this->attributes['name'] = strip_tags($value);
    }

    public function setFamilyAttribute($value): void
    {
        $this->attributes['family'] = strip_tags($value);
    }

    public function setUsernameAttribute($value): void
    {
        $this->attributes['username'] = strip_tags($value);
    }

    public function getFullNameAttribute(): string
    {
        if ($this->name && $this->family) {
            return $this->attributes['full_name'] = $this->name . ' ' . $this->family;
        }
        return $this->attributes['full_name'] = 'بدون نام';
    }

    public function getStatuses(): array
    {
        return [
            __('statuses.elementary') => Userlevel::Elementary,
            __('statuses.guidance') => Userlevel::Guidance,
            __('statuses.high_school') => Userlevel::High_school,
            __('statuses.pre_university') => Userlevel::Pre_university,
        ];
    }

    public function getBadgeStatus(): string
    {
        return match ($this->level) {
            Userlevel::Elementary => '<div class="badge badge-success mr-1 mb-1">' . __('statuses.elementary') . '</div>',
            Userlevel::Guidance => '<div class="badge badge-info mr-1 mb-1">' . __('statuses.guidance') . '</div>',
            Userlevel::High_school => '<div class="badge badge-warning mr-1 mb-1">' . __('statuses.high_school') . '</div>',
            Userlevel::Pre_university => '<div class="badge badge-danger mr-1 mb-1">' . __('statuses.pre_university') . '</div>',
            default => '<div class="badge badge-secondary mr-1 mb-1"> ' . __('statuses.unknown') . ' </div>',
        };
    }

    public function hasPermission($permission): bool
    {
        return $this->role->permissions->contains('en_name', $permission->en_name);
    }

}
