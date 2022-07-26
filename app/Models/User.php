<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
    use HasApiTokens, Notifiable ,SoftDeletes;


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
    protected $perPage = 10;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'family',
        'mobile',
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
        return Jalalian::forge($this->created_at)->format('Y/m/d H:i:s');
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strip_tags($value);
    }

    public function setFamilyAttribute($value)
    {
        $this->attributes['family'] = strip_tags($value);
    }


    public function setUsernameAttribute($value)
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
              'ابتدایی' => $this::ELEMENTARY,
              'راهنمایی' => $this::GUIDANCE,
              'دبیرستان' => $this::HIGH_SCHOOL,
              'پیش دانشگاهی' => $this::PRE_UNIVERSITY,
        ];

    }

    public function getBadgeStatus(): string
    {
        if($this->level == $this::ELEMENTARY){
            $level = '<div class="badge badge-success mr-1 mb-1">ابتدایی</div>';
        }elseif ($this->level == $this::GUIDANCE){
            $level = '<div class="badge badge-info mr-1 mb-1">راهنمایی</div>';
        }elseif ($this->level == $this::HIGH_SCHOOL){
            $level = '<div class="badge badge-warning mr-1 mb-1">دبیرستان</div>';
        }elseif ($this->level == $this::PRE_UNIVERSITY){
            $level = '<div class="badge badge-danger mr-1 mb-1">پیش دانشگاهی</div>';
        }else{
            $level = '<div class="badge badge-secondary mr-1 mb-1">نامشخص</div>';
        }
        return $level;
    }


    public function hasPermission($permission)
    {
        return $this->role->permissions->contains('en_name',$permission->en_name);
    }

}
