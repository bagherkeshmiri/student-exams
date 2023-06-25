<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Answer extends Model
{
    /*--------- Const Variables ---------*/

    public const VERY_WEAK = 0;
    public const WEAK_NEED_CORRECTION = 1;
    public const CORRECTED = 2;
    public const OK_CONFIRM = 3;

    /*------------ Variables ------------*/

    protected $table = 'answers';

    /*------------ Relations ------------*/

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    /*-------------- Scopes -------------*/

    /*---------- Other Functions --------*/

    public function getStatuses(): array
    {
        return [
            'خیلی ضعیف' => $this::VERY_WEAK,
            'ضعیف / نیاز به اصلاح' => $this::WEAK_NEED_CORRECTION,
            'تصحیح شده' => $this::CORRECTED,
            'تایید شده' => $this::OK_CONFIRM,
        ];
    }

}
