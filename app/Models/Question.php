<?php

namespace App\Models;

use App\Enums\Questions\QuestionStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Morilog\Jalali\Jalalian;

class Question extends Model
{
    /*--------- Const Variables ---------*/

    public const TABLE_NAME = 'questions';
    public const COLUMN_ID = 'id';
    public const COLUMN_USER_ID = 'user_id';
    public const COLUMN_QUESTION_ID = 'question_id';

    /*------------ Variables ------------*/

    protected $table = self::TABLE_NAME;
    protected $perPage = 10;

    protected $casts = [
        'response_time' => 'datetime',
        'review_time' => 'datetime',
        'confirmation_time' => 'datetime',
        'protest_time' => 'datetime',
        'status' => QuestionStatus::class,
    ];

    /*------------ Relations ------------*/

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_questions', self::COLUMN_QUESTION_ID, self::COLUMN_USER_ID);
    }

    public function protest(): HasOne
    {
        return $this->hasOne(Protest::class, self::COLUMN_QUESTION_ID, self::COLUMN_ID);
    }

    public function answer(): HasOne
    {
        return $this->hasOne(Answer::class, self::COLUMN_QUESTION_ID, self::COLUMN_ID);
    }

    public function admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class);
    }

    /*-------------- Scopes -------------*/

    /*---------- Other Functions --------*/

    public function getJalaliCreatedAt(): string|null
    {
        return ($this->created_at)
            ? Jalalian::forge($this->created_at)->format('Y/m/d H:i:s')
            : null;
    }

    public function getJalaliResponseTime(): string|null
    {
        return ($this->response_time)
            ? Jalalian::forge($this->response_time)->format('Y/m/d H:i:s')
            : null;
    }

    public function getJalaliReviewTime(): string|null
    {
        return ($this->review_time)
            ? Jalalian::forge($this->review_time)->format('Y/m/d H:i:s')
            : null;
    }

    public function getJalaliConfirmationTime(): string|null
    {
        return ($this->confirmation_time)
            ? Jalalian::forge($this->confirmation_time)->format('Y/m/d H:i:s')
            : null;
    }

    public function getJalaliProtestTime(): string|null
    {
        return ($this->protest_time)
            ? Jalalian::forge($this->protest_time)->format('Y/m/d H:i:s')
            : null;
    }

    public function setLinkAttribute($value)
    {
        $this->attributes['link'] = strip_tags($value);
    }

    public function setTextAttribute($value)
    {
        $this->attributes['text'] = strip_tags($value);
    }

    public function getBadgeStatus(): string
    {
        return match ($this->status) {
            QuestionStatus::Raw => '<div class="badge badge-success mr-1 mb-1"> ' . __('statuses.new') . ' </div>',
            QuestionStatus::Answered => '<div class="badge badge-secondary mr-1 mb-1"> ' . __('statuses.answered') . ' </div>',
            QuestionStatus::Reviewd => '<div class="badge badge-info mr-1 mb-1"> ' . __('statuses.corrected') . ' </div>',
            QuestionStatus::HaveProtest => '<div class="badge badge-warning mr-1 mb-1"> ' . __('statuses.have_protest') . ' </div>',
            QuestionStatus::ProtestApproved => '<div class="badge badge-danger mr-1 mb-1"> ' . __('statuses.protest_approved') . ' </div>',
            QuestionStatus::Confirmed => '<div class="badge badge-primary mr-1 mb-1"> ' . __('statuses.ok_confirm') . ' </div>',
            default => '<div class="badge badge-secondary mr-1 mb-1"> ' . __('statuses.unknown') . ' </div>',
        };
    }
}
