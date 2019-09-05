<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newcalendar extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'newcalendars';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['appointment', 'location', 'time'];

    
}
