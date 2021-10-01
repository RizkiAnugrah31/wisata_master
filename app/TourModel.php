<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TourModel extends Model
{
    //    Soft Delete
    use softDeletes;

//    Nama Table
    protected $table = "tour";

//    Nama Primary Key
    protected $primaryKey = "tour_id";

//    Field yang bisa di isi
    protected $fillable = [
        "tour_id",
        "tour_name",
        "tour_desc",
        "longtitude",
        "latitude",
        "tour_location_name",
        "price_adult",
        "price_child",
        "tour_facility",
        "operational_hour",
        "tour_image_primary",
    ];

    public $incrementing=false;

//  Field yang di sembunyikan
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
