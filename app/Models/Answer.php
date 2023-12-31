<?php

namespace App\Models;

use App\Enums\Answers\AnswerStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Answer extends Model
{
    /*--------- Const Variables ---------*/

    public const TABLE_NAME = 'answers';
    public const COLUMN_ID = 'id';
    public const COLUMN_QUESTION_ID = 'question_id';

    /*------------ Variables ------------*/

    protected $table = self::TABLE_NAME;

    protected $casts = [
        'status' => AnswerStatus::class,
    ];

    /*------------ Relations ------------*/

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class, self::COLUMN_QUESTION_ID, self::COLUMN_ID);
    }

    /*-------------- Scopes -------------*/

    /*---------- Other Functions --------*/
}
