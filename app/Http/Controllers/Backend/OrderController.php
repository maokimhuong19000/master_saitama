<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order_list(){
        return view('backend.pages.Olist');
    }

    public function order_detail(){
        return view('backend.pages.Odetail');
    }

}
