<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Permission extends Model
{
    /*--------- Const Variables ---------*/

    public const TABLE_NAME = 'bank_accounts';

    /*------------ Variables ------------*/

    protected $table = self::TABLE_NAME;

    /*------------ Relations ------------*/

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'role_permission');
    }

    /*-------------- Scopes -------------*/

    /*---------- Other Functions --------*/
}
