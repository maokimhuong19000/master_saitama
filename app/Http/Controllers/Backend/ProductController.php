<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product; 
class ProductController extends Controller
{
    public function product_list(){
        // $prolist['masteradmin_db']=DB::table('products')->paginate(10);    
        // dd($prolist);
        $products = Product::paginate(10);
        return view('backend.pages.Plist',compact('products'));
    }


    public function product_detail(Request $id){
        return view('backend.pages.Pdetail');
    }

    public function dis(){
        return view('backend.pages.Discount');
    }
}
