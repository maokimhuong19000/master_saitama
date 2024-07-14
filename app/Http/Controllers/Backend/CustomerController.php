<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function cus_list(){
        return view('backend.pages.Clist');
    }

    public function cus_detail(){
        return view('backend.pages.Cdetail');
    }
}
