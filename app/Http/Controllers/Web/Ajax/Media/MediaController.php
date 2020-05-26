<?php

namespace App\Http\Controllers\Web\Ajax\Media;


use App\Http\Controllers\Admin\BaseController;


use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\DataTables;

class MediaController extends BaseController
{
    public function __construct()
    {

        parent::__construct();
    }


    public function postUpload(Request $request){
        ini_set('memory_limit', '-1');

        $_type = $request->get("type");

        if( $_type !== "image/png"
            && $_type !== "image/jpeg"
            && $_type !== "image/jpg"
            && $_type !== "image/gif"
            && $_type !== "image/bmp"
            && $_type !== "video/mov"
            && $_type !== "video/avi"
            && $_type !== "video/flv"
            && $_type !== "video/wmv"
            && $_type !== "video/mpg"
            && $_type !== "video/mp4"
        ){
            return response()->json([
                'message' => 'Error file type'
            ], 401);
        }






        return response()->json(['data' => [], 'message' => "good connect"]);
    }


}
