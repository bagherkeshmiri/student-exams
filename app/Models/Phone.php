<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Phone extends Model
{
    use HasFactory;

    /*--------- Const Variables ---------*/


    /*------------ Variables ------------*/

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'phones';



    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'number',
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

    public function phoneable(): MorphTo
    {
        return $this->morphTo();
    }

    /*-------------- Scopes -------------*/



    /*---------- Other Functions --------*/



}
