<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string   $id
 * @property string   $userId
 * @property string   $listingId
 * @property DateTime $startDate
 * @property DateTime $endDate
 * @property DateTime $createdAt
 * @property int      $totalPrice
 */
class Reservation extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Reservation';

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
        'userId', 'listingId', 'startDate', 'endDate', 'totalPrice', 'createdAt'
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
        'id' => 'string', 'userId' => 'string', 'listingId' => 'string', 'startDate' => 'datetime', 'endDate' => 'datetime', 'totalPrice' => 'int', 'createdAt' => 'datetime'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'startDate', 'endDate', 'createdAt'
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
