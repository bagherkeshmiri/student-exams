<?php

use App\Enums\Answers\AnswerStatus;
use App\Enums\Questions\QuestionStatus;
use App\Enums\Users\Userlevel;

function getUserLevels(): array
{
    return [
        __('statuses.elementary') => Userlevel::Elementary,
        __('statuses.guidance') => Userlevel::Guidance,
        __('statuses.high_school') => Userlevel::High_school,
        __('statuses.pre_university') => Userlevel::Pre_university,
    ];
}

function getAnswerStatuses(): array
{
    return [
        __('statuses.very_weak') => AnswerStatus::VeryWeak,
        __('statuses.weak_and_need_correction') => AnswerStatus::WeakAndNeedCorrection,
        __('statuses.corrected') => AnswerStatus::Corrected,
        __('statuses.ok_confirm') => AnswerStatus::OkConfirm,
    ];
}

function getQuestionstatuses(): array
{
    return [
        __('statuses.new') => QuestionStatus::Raw,
        __('statuses.answered') => QuestionStatus::Answered,
        __('statuses.corrected') => QuestionStatus::Reviewd,
        __('statuses.have_protest') => QuestionStatus::HaveProtest,
        __('statuses.protest_approved') => QuestionStatus::ProtestApproved,
        __('statuses.ok_confirm') => QuestionStatus::Confirmed,
    ];
}
