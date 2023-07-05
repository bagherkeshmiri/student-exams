<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Answer extends Model
{
    use HasFactory;


    /*--------- Const Variables ---------*/

    const VERY_WEAK = 0;
    const WEAK_NEED_CORRECTION = 1;
    const CORRECTED = 2;
    const OK_CONFIRM = 3;

    /*------------ Variables ------------*/

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'answers';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'question_id',
        'text',
        'incorrect_statement',
        'correct_statement',
        'status',
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
    protected $casts = [];

    /*------------ Relations ------------*/

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    /*-------------- Scopes -------------*/



    /*---------- Other Functions --------*/


    public function getStatuses () {
        return [
            'خیلی ضعیف' => $this::VERY_WEAK,
            'ضعیف / نیاز به اصلاح' => $this::WEAK_NEED_CORRECTION,
            'تصحیح شده' => $this::CORRECTED,
            'تایید شده' => $this::OK_CONFIRM,
        ];
    }

}
