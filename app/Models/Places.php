<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string   $userId
 * @property string   $locationValue
 * @property string   $category
 * @property int      $roomCount
 * @property int      $guestCount
 * @property int      $bathroomCount
 * @property DateTime $startDate
 * @property DateTime $endDate
 */
class Places extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'places';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = '';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
       'id', 'userId', 'roomCount', 'guestCount', 'bathroomCount', 'locationValue', 'startDate', 'endDate', 'category'
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
        'id'=>'int','userId' => 'string', 'roomCount' => 'int', 'guestCount' => 'int', 'bathroomCount' => 'int', 'locationValue' => 'string', 'startDate' => 'datetime', 'endDate' => 'datetime', 'category' => 'string'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'startDate', 'endDate'
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
