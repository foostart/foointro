<?php namespace Foointro\Front\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use URL,
    Route,
    Redirect;

class FrontController extends Controller
{
    public function index(){
        // var_dump('controller');
        return view('front::home.index');
    }

    public function get_list(){
        return view('front::list.index');
    }

    public function get_detail(){
    	return view('front::detail.index');
    }

    public function get_service(){
    	return view('front::service.index');
    }
}