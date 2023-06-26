<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Protest extends Model
{
    /*--------- Const Variables ---------*/

    public const TABLE_NAME = 'protests';
    public const COLUMN_ID = 'id';
    public const COLUMN_QUESTION_ID = 'question_id ';

    /*------------ Variables ------------*/

    protected $table = self::TABLE_NAME;

    /*------------ Relations ------------*/

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class, self::COLUMN_QUESTION_ID, self::COLUMN_ID);
    }

    /*-------------- Scopes -------------*/

    /*---------- Other Functions --------*/

    public function setTextAttribute($value): void
    {
        $this->attributes['text'] = strip_tags($value);
    }


}
