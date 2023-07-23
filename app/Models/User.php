<?php

namespace App\Models;

use App\Enums\Users\Userlevel;
use App\Enums\Users\UserType;
use Illuminate\Database\Eloquent\Builder;
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
    public const COLUMN_USER_ID = 'user_id';
    public const COLUMN_QUESTION_ID = 'question_id';
    public const COLUMN_ROLE_ID = 'role_id';
    public const AVATAR_PATH = 'uploads/users/avatar/';

    /*------------ Variables ------------*/

    protected $table = self::TABLE_NAME;
    protected $perPage = 10;
    protected $fillable = [
        'name',
        'family',
        'username',
        'mobile',
        'password',
        'level',
        'type',
        'remember_token',
    ];
    protected $casts = [
        'level' => Userlevel::class,
        'type' => UserType::class,
    ];

    /*------------ Relations ------------*/


    public function phones(): MorphMany
    {
        return $this->morphMany(Phone::class, 'phoneable');
    }


    public function questions(): BelongsToMany
    {
        return $this->belongsToMany(Question::class, 'user_questions', self::COLUMN_USER_ID, self::COLUMN_QUESTION_ID);
    }

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'user_role', self::COLUMN_USER_ID, self::COLUMN_ROLE_ID);
    }

    /*-------------- Scopes -------------*/

    public function scopeIsAdmin(Builder $query): Builder
    {
        return $query->where('type', UserType::Admin);
    }

    public function scopeIsUser(Builder $query): Builder
    {
        return $query->where('type', UserType::User);
    }

    /*---------- Other Functions --------*/


    public function getJalaliCreatedAt(): string|null
    {
        return ($this->created_at)
            ? Jalalian::forge($this->created_at)->format('Y/m/d H:i:s')
            : null;
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

    public function getBadgeStatus(): string
    {
        return match ($this->level) {
            Userlevel::Elementary => '<div class="badge badge-success mr-1 mb-1">' . __('statuses.elementary') . '</div>',
            Userlevel::Guidance => '<div class="badge badge-info mr-1 mb-1">' . __('statuses.guidance') . '</div>',
            Userlevel::HighSchool => '<div class="badge badge-warning mr-1 mb-1">' . __('statuses.high_school') . '</div>',
            Userlevel::PreUniversity => '<div class="badge badge-danger mr-1 mb-1">' . __('statuses.pre_university') . '</div>',
            default => '<div class="badge badge-secondary mr-1 mb-1"> ' . __('statuses.unknown') . ' </div>',
        };
    }

    public function hasPermission($permission): bool
    {
        return $this->role->permissions->contains('en_name', $permission->en_name);
    }

}
