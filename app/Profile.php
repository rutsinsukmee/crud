<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table ="profiles";
    protected $primaryKey = 'id';
    protected $fillable = ['role','address','zipcode','user_id'];

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    } 

}
