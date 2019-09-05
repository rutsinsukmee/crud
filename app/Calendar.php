<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $table = 'calendar';
    protected $primaryKey = 'id';
    protected $fillable = ['appointment', 'location', 'time', 'created_at', 'updated_at'];
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
        return self::where('appointment', 'LIKE', "%$keyword%")
            ->orWhere('location', 'LIKE', "%$keyword%")
            ->orWhere('time', 'LIKE', "%$keyword%")
            ->orWhere('created_at', 'LIKE', "%$keyword%")
            ->orWhere('updated_at', 'LIKE', "%$keyword%")
            ->get();
    }
    public static function storeItem($newItem)
    {
        return self::create($newItem);  
    }
    public static function updateItem($id,$item)
    {
        self::findOrFail($id)->update($item);
    }
    public static function destroyItem($id)
    {
        self::findOrFail($id)->delete();
    }
}