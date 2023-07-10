<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    /*--------- Const Variables ---------*/

    public const TABLE_NAME = 'roles';
    public const COLUMN_ID = 'id';
    public const COLUMN_ROLE_ID = 'role_id';
    public const COLUMN_PERMISSION_ID = 'permission_id';

    /*------------ Variables ------------*/

    protected $table = self::TABLE_NAME;
    protected $fillable = [
        'fa_name',
        'en_name',
    ];

    /*------------ Relations ------------*/

    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class, 'role_permission', self::COLUMN_ROLE_ID, self::COLUMN_PERMISSION_ID);
    }


    public function admins(): BelongsToMany
    {
        return $this->belongsToMany(Admin::class, 'admin_role', self::COLUMN_ROLE_ID, self::COLUMN_ID);
    }

    /*-------------- Scopes -------------*/

    /*---------- Other Functions --------*/
}
