<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TourImageModel extends Model
{
    //    Soft Delete
    use softDeletes;

//    Nama Table
    protected $table = "tour";

//    Nama Primary Key
    protected $primaryKey = "tour_image_id";

//    Field yang bisa di isi
    protected $fillable = [
        "tour_image_id",
        "tour_id",
        "tour_image"
        
    ];

    public $incrementing=false;

//  Field yang di sembunyikan
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
