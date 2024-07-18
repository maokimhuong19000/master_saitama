<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\ProductDetail;
class ProductController extends Controller
{   
    // fetch product
    public function product_list(){
        // $prolist['masteradmin_db']=DB::table('products')->paginate(10);    
        // dd($prolist);
        $products = Product::paginate(10);
        return view('backend.pages.Plist',compact('products'));
    }

    // product view
    public function PLview($id){
        $product = DB::table('products')
        ->join('product_details', 'products.id', '=', 'product_details.product_id')
        ->where('products.id', $id)
        ->select('products.*', 'product_details.*')
        ->first();
        return view('backend.pages.Pdetail', compact('product'));
    }

    //product add
    public function product_add(){

        return view('backend.pages.Padd');
    }







    public function product_detail(){
        return view('backend.pages.Pdetail');
    }




    public function dis(){
        return view('backend.pages.Discount');
    }
}
