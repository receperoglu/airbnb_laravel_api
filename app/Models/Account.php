<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property string $userId
 * @property string $type
 * @property string $provider
 * @property string $providerAccountId
 * @property string $refresh_token
 * @property string $access_token
 * @property string $token_type
 * @property string $scope
 * @property string $id_token
 * @property string $session_state
 * @property int    $expires_at
 */
class Account extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Account';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userId', 'type', 'provider', 'providerAccountId', 'refresh_token', 'access_token', 'expires_at', 'token_type', 'scope', 'id_token', 'session_state'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'string', 'userId' => 'string', 'type' => 'string', 'provider' => 'string', 'providerAccountId' => 'string', 'refresh_token' => 'string', 'access_token' => 'string', 'expires_at' => 'int', 'token_type' => 'string', 'scope' => 'string', 'id_token' => 'string', 'session_state' => 'string'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = true;

    // Scopes...

    // Functions ...

    // Relations ...
}
