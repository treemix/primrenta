<?php

namespace App\Http\Controllers\Admin\Ajax\Media;


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


    public function MediaController(Request $request){







        return response()->json([]);
    }


}
