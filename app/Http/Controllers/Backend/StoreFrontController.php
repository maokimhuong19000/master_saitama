<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreFrontController extends Controller
{
    public function shome(){
        return view('backend.pages.StorefrontHome');
    }
    public function sfffilter(){
        return view('backend.pages.StorefrontFilters');
    }
    public function sfcategories(){
        return view('backend.pages.StorefrontCategories');
    }
    public function sfdetail(){
        return view('backend.pages.StorefrontDetail');
    }
    public function sfcart(){
        return view('backend.pages.StorefrontCart');
    }
    public function sfcheckout(){
        return view('backend.pages.StorefrontCheckout');
    }
    public function sfinvoice(){
        return view('backend.pages.StorefrontInvoice');
    }
}
