<?php

namespace App\Http\Controllers\Cms;

use App\SplashScreenModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SplashScreenController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->all());
//        Get all data Menu from database
        $data = SplashScreenModel::paginate($request->limit);
        return $data;
    }

    public function detail($id){
        $data = SplashScreenModel::find($id);
        return $data;
    }



    public function store(Request $request)
    {
//        Get All data from request
        $data = $request->all();
//        query create
        $create = SplashScreenModel::insert($data);
//        check if create success or not
        if ($create) {
            return "success";
        } else {
            return "false";
        }
    }
    public function update(Request $request, $id)
    {
//        Get All data from request
        $data = $request->all();
//        query update
        $update = SplashScreenModel::where('splash_screen_id',$id)->update($data);
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
        $delete = SplashScreenModel::find($id)->delete();
//        check if delete success or not
        if ($delete) {
            return "success";
        } else {
            return "false";
        }
    }
}
