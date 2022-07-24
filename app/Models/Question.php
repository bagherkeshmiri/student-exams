<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Hash;
use Morilog\Jalali\Jalalian;

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
    protected $perPage = 10;


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


    public function admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class);
    }

    /*-------------- Scopes -------------*/



    /*---------- Other Functions --------*/

    public function getJalaliCreatedAt(): string
    {
        return Jalalian::forge($this->created_at)->format('Y/m/d H:i:s');
    }


    public function getJalaliResponseTime()
    {
        if(!is_null($this->response_time)){
            return Jalalian::forge($this->response_time)->format('Y/m/d H:i:s');
        }
    }

    public function getJalaliReviewTime()
    {
        if($this->review_time){
            return Jalalian::forge($this->review_time)->format('Y/m/d H:i:s');
        }
    }

    public function getJalaliConfirmationTime()
    {
        if($this->confirmation_time){
            return Jalalian::forge($this->confirmation_time)->format('Y/m/d H:i:s');
        }
    }

    public function getJalaliProtestTime()
    {
        if($this->protest_time){
            return Jalalian::forge($this->protest_time)->format('Y/m/d H:i:s');
        }
    }

    public function setLinkAttribute($value)
    {
        $this->attributes['link'] = strip_tags($value);
    }

    public function setTextAttribute($value)
    {
        $this->attributes['text'] = strip_tags($value);
    }

    public function getStatuses(): array
    {
        return [
            'جدید' => self::NEW,
            'مشاهده شده' => $this::REVIEWED,
            'دارای اعتراض' => $this::HAVE_PROTEST,
            'بازبینی شده' => $this::PROTEST_APPROVED,
            ' تایید شده' => $this::CONFIRMED,
        ];

    }



    public function getBadgeStatus(): string
    {
        if($this->status == self::NEW){
            $status = '<div class="badge badge-success mr-1 mb-1">جدید</div>';
        }elseif ($this->status == $this::REVIEWED){
            $status = '<div class="badge badge-info mr-1 mb-1">مشاهده شده</div>';
        }elseif ($this->status == $this::HAVE_PROTEST){
            $status = '<div class="badge badge-warning mr-1 mb-1">دارای اعتراض</div>';
        }elseif ($this->status == $this::PROTEST_APPROVED){
            $status = '<div class="badge badge-danger mr-1 mb-1">بازبینی شده </div>';
        }elseif ($this->status == $this::CONFIRMED){
            $status = '<div class="badge badge-primary mr-1 mb-1">تایید شده </div>';
        }else{
            $status = '<div class="badge badge-secondary mr-1 mb-1">نامشخص</div>';
        }
        return $status;
    }

}
