<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SplashScreenModel extends Model
{
    //    Soft Delete
    use softDeletes;

//    Nama Table
    protected $table = "splash_screen";

//    Nama Primary Key
    protected $primaryKey = "splash_screen_id";

//    Field yang bisa di isi
    protected $fillable = [
        "splash_screen_image",
        "splash_screen_desc",
    ];

//  Field yang di sembunyikan
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
