<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Morilog\Jalali\Jalalian;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;


    /*--------- Const Variables ---------*/

    const AVATAR_PATH = 'uploads/users/avatar/';
    const ELEMENTARY = 0;
    const GUIDANCE = 1;
    const HIGH_SCHOOL = 2;
    const PRE_UNIVERSITY= 3;



    /*------------ Variables ------------*/

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';
    protected string $guard = 'user';


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
        'level'
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


    public function questions(): BelongsToMany
    {
        return $this->belongsToMany(Question::class,'users_questions');
    }

    /*-------------- Scopes -------------*/



    /*---------- Other Functions --------*/


    public function getJalaliCreatedAt(): string
    {
        return Jalalian::forge($this->create_at)->format('Y/m/d H:i:s');
    }

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


    public function getStatuses(): array
    {
        return [
              'ابتدایی' => $this::ELEMENTARY,
              'راهنمایی' => $this::GUIDANCE,
              'دبیرستان' => $this::HIGH_SCHOOL,
              'پیش دانشگاهی' => $this::PRE_UNIVERSITY,
        ];

    }

}
