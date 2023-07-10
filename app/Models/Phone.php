<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Phone extends Model
{
    /*--------- Const Variables ---------*/

    public const TABLE_NAME = 'phones';
    public const COLUMN_ID = 'id';

    /*------------ Variables ------------*/

    protected $table = self::TABLE_NAME;
    protected $fillable = [
        'phoneable_id',
        'phoneable_type',
        'number',
    ];

    /*------------ Relations ------------*/

    public function phoneable(): MorphTo
    {
        return $this->morphTo();
    }

    /*-------------- Scopes -------------*/

    /*---------- Other Functions --------*/
}
