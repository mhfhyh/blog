<?php

namespace App\Http\Controllers;

use App\User;
use App\User2;
use App\User3;
use App\User4;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function show_search_view(){
    return view("search_view")->with("is_result",false);
    }

    function show_search_result(){
        $peoples = User::find_result(request('name') ,request('phone'),request('email') ,request('username') ,request('id'));
        $peoples2 = User2::find_result(request('name') ,request('phone'),request('email') ,request('username') ,request('id'));
        $peoples3 = User3::find_result(request('name') ,request('phone'),request('email') ,request('username') ,request('id'));
        $peoples4 = User4::find_result(request('name') ,request('phone'),request('email') ,request('username') ,request('id'));

        //dd($peoples,$peoples2,$peoples3,$peoples4);
        return view("search_view",["peoples_arr"=>[$peoples,$peoples2,$peoples3,$peoples4],"is_result"=>true]);
    }
}
