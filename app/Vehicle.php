<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicles';

    protected $primaryKey = 'id';

    protected $fillable = ['brand', 'series', 'colour', 'year', 'mileage'];

    public static function getAll()
    {
        return self::get();
    }

    public static function getItem($id)
    {
        return self::findOrFail($id);
    }

    public static function search($keyword)
    {
        return self::where('brand', 'LIKE', "%$keyword%")
            ->orWhere('series', 'LIKE', "%$keyword%")
            ->orWhere('colour', 'LIKE', "%$keyword%")
            ->orWhere('year', 'LIKE', "%$keyword%")
            ->orWhere('mileage', 'LIKE', "%$keyword%")
          ->get();
    }

    public static function storeItem($item)
    {
        return self::create($item); //RETURN OBJECT
    }

    public static function updateItem($id,$item)
    {
        self::findOrFail($id)->update($item);
    }

    public static function destroyItem($id)
    {
        self::findOrFail($id)->delete();
    }

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
     
}
