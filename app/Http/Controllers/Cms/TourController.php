<?php

namespace App\Http\Controllers\Cms;

use App\TourModel;
use App\TourImageModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Ramsey\Uuid\Uuid;

class TourController extends Controller


{
    public function index(Request $request)
    {

        $data = TourModel::paginate($request->limit);
        return $data;
    }

    public function detail($id){
        $data = TourModel::find($id);
        return $data;
    }



    public function store(Request $request)
    {
        //  dd($request->all());
        //        Get All data from request
        $uuid1 = Uuid::uuid1();
        //   dd($data);
        $dataTour = $request->except("tour_image");
        $dataTour["tour_id"] = $uuid1->toString();
//        query create
        $createTour = TourModel::insert($dataTour);
//        check if create success or not
             if ($createTour) {
        return "success";
        } else {
                 return "false";
        }
        

        $dataTourImage= $request->tour_image;


    }
    public function update(Request $request, $id)
    {
//        Get All data from request
         $data = $request->all();
//        query update
        $update = TourModel::where('tour_id',$id)->update($data);
//        check if update success or not
        if ($update) {
            return "success";
        } else {
            return "false";
        }
    }
    public function delete($id)
    {
//        query update
        $delete = TourModel::find($id)->delete();
//        check if delete success or not
        if ($delete) {
            return "success";
        } else {
            return "false";
        }
    }
}
