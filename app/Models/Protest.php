<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Protest extends Model
{
    use HasFactory;


    /*--------- Const Variables ---------*/


    /*------------ Variables ------------*/



    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'protests';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'question_id',
        'text',
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

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    /*-------------- Scopes -------------*/



    /*---------- Other Functions --------*/


    public function setTextAttribute($value)
    {
        $this->attributes['text'] = strip_tags($value);
    }


}
