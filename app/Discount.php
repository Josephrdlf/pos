<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    public static function findByCode($code){
        return self::where('code',$code)->first();
    }

    public function discount(){
        
    }
}
