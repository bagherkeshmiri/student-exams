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



    /*------------ Relations ------------*/

    public function phoneable(): MorphTo
    {
        return $this->morphTo();
    }

    /*-------------- Scopes -------------*/



    /*---------- Other Functions --------*/



}
