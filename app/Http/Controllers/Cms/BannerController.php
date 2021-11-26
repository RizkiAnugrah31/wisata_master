<?php

namespace App\Http\Controllers\Cms;

use App\BannerModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Ramsey\Uuid\Uuid;

class BannerController extends Controller
{
    public function index(Request $request)
    {
        $data = BannerModel::with('to_tur')->paginate($request->limit);
        return $data;
    }

    public function detail($id){
        $data = BannerModel::find($id);
        return $data;
    }


    public function store(Request $request)
    {
//        Get All data from request
        $data = $request->all();
        $uuid1 = Uuid::uuid1();
        $data["banner_id"] = $uuid1->toString();
//        query create
        $create = BannerModel::insert($data);
//        check if create success or not
        if ($create) {
            return response()->json([
            'data'=> $data,
            'message' => 'valid', 
            'succes' => true
            
            ]);

    }else {
    return response()->json([
        'message' =>'invalid',
        'succes'=> false
    ]);
    }
    }
    public function update(Request $request, $id)
    {
//        Get All data from request
        $data = $request->all();
//        query update
        $update = BannerModel::where('banner_id',$id)->update($data);
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
        $delete = BannerModel::find($id)->delete();
//        check if delete success or not
        if ($delete) {
            return "success";
        } else {
            return "false";
        }
    }
}
