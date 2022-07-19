<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Hash;

class Question extends Model
{
    use HasFactory;

    /*--------- Const Variables ---------*/

    const NEW = 0;
    const REVIEWED = 1;
    const HAVE_PROTEST = 2;
    const PROTEST_APPROVED = 3;
    const CONFIRMED = 4;

    /*------------ Variables ------------*/

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'questions';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'link',
        'response_deadline',
        'admin_id',
        'status',
        'text',
        'response_time',
        'review_time',
        'confirmation_time',
        'protest_time',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [ ];


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'response_time' => 'datetime',
        'review_time' => 'datetime',
        'confirmation_time' => 'datetime',
        'protest_time' => 'datetime',
        'response_deadline' => 'datetime',
    ];


    /*------------ Relations ------------*/

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class,'users_questions');
    }


    public function protest(): HasOne
    {
        return $this->hasOne(Protest::class);
    }


    public function answer(): HasOne
    {
        return $this->hasOne(Answer::class);
    }
    /*-------------- Scopes -------------*/



    /*---------- Other Functions --------*/


}
