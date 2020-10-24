<?php

namespace App\Models;



class Image extends BaseModel
{
    protected $table='images';
    protected $fillable=['filename','user_id','created_at','updated_at'];
    public function index_to_landing_page(){
        $images=new Image();
        return view('pages/landing',[$images]);
    }
}
