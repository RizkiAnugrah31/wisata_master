<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BannerModel extends Model
{
    //    Soft Delete
    use softDeletes;

//    Nama Table
    protected $table = "banner";

//    Nama Primary Key
    protected $primaryKey = "banner_id";

//    Field yang bisa di isi            
    protected $fillable = [
        "banner_id",
        "tour_id"
    ];

    public $incrementing=false;

//  Field yang di sembunyikan
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
