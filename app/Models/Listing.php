<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string   $id
 * @property string   $title
 * @property string   $description
 * @property string   $imageSrc
 * @property string   $category
 * @property string   $locationValue
 * @property string   $userId
 * @property DateTime $createdAt
 * @property int      $roomCount
 * @property int      $bathroomCount
 * @property int      $guestCount
 * @property int      $price
 */
class Listing extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Listing';

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
        'title', 'description', 'imageSrc', 'createdAt', 'category', 'roomCount', 'bathroomCount', 'guestCount', 'locationValue', 'userId', 'price'
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
        'id' => 'string', 'title' => 'string', 'description' => 'string', 'imageSrc' => 'string', 'createdAt' => 'datetime', 'category' => 'string', 'roomCount' => 'int', 'bathroomCount' => 'int', 'guestCount' => 'int', 'locationValue' => 'string', 'userId' => 'string', 'price' => 'int'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'createdAt'
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
