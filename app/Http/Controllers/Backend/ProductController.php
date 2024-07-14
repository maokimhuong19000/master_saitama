<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product_list(){
        return view('backend.pages.Plist');
    }

    public function product_detail(){
        return view('backend.pages.Pdetail');
    }

    public function dis(){
        return view('backend.pages.Discount');
    }


}
