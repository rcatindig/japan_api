<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name'
    ];

     /*
    |------------------------------------------------------------------------------------
    | Validations
    |------------------------------------------------------------------------------------
    */
    public static function rules($update = false, $id = null)
    {
        $common = [
            'name'    => "required"
        ];

        if ($update) {
            return $common;
        }

        return array_merge($common, [
            'name'    => "required"
        ]);
    }
}
