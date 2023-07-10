<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Permission extends Model
{
    /*--------- Const Variables ---------*/

    public const TABLE_NAME = 'permissions';
    public const COLUMN_ID = 'id';
    public const COLUMN_PERMISSION_ID = 'permission_id ';
    public const COLUMN_ROLE_ID = 'role_id ';

    /*------------ Variables ------------*/

    protected $table = self::TABLE_NAME;
    protected $fillable = [
        'fa_name',
        'en_name',
    ];

    /*------------ Relations ------------*/

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'role_permission', self::COLUMN_PERMISSION_ID, self::COLUMN_ROLE_ID);
    }

    /*-------------- Scopes -------------*/

    /*---------- Other Functions --------*/
}
