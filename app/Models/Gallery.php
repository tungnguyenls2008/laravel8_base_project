<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends BaseModel
{
    use HasFactory;
    protected $table='galleries';
    protected $fillable=['gallery_name','created_at','updated_at'];
}
