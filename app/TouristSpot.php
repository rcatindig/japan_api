<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TouristSpot extends Model
{
    protected $fillable = [
        'name', 'location', 'city_id', 'photo_url', 'description'
    ];

    /*
    |------------------------------------------------------------------------------------
    | Validations
    |------------------------------------------------------------------------------------
    */
    public static function rules($update = false, $id = null)
    {
        $common = [
            'name'    => "required",
            'location'    => "required",
            'description'    => "required",
            'photo_url' => 'image',
        ];

        if ($update) {
            return $common;
        }

        return array_merge($common, [
            'name'    => "required",
            'location'    => "required",
            'description'    => "required",
            'photo_url' => 'image',
        ]);
    }

    
    public function getPhotoUrlAttribute($value)
    {
        if (!$value) {
            return 'http://placehold.it/160x160';
        }
    
        return config('variables.photo_url.public').$value;
    }
    public function setPhotoUrlAttribute($photo)
    {
        $this->attributes['photo_url'] = move_file($photo, 'photo_url');
    }
}
