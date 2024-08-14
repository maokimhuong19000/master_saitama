<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\ProductCategories;

class ProductController extends Controller
{
    // fetch product
    public function product_list()
    {
        // $prolist['masteradmin_db']=DB::table('products')->paginate(10);
        // dd($prolist);
        $products = Product::paginate(10);
        return view('backend.pages.Plist', compact('products'));
    }

    // product view
    public function PLview($id)
    {

        $product = DB::table('products')
            ->join('product_details', 'products.id', '=', 'product_details.product_id')
            ->join('product_categories', 'products.category_id', '=', 'product_categories.id')
            ->where('products.id', $id)
            ->select(
                'products.*',
                'product_details.sku',
                'product_details.barcode',
                'product_details.quantity',
                'product_details.allow_out_of_stock',
                'product_details.notify_low_stock',
                'product_details.display_at_storefront',
                'product_details.standard_shipping',
                'product_details.express_shipping',
                'product_details.priority_shipping',
                'product_details.attribute_names',
                'product_details.attribute_values',
                'product_details.tax_excluded',
                'product_details.tax_included',
                'product_details.image_url',
                'product_details.gallery_urls',
                'product_categories.name as category_name'
            )
            ->first();



        $categories = ProductCategories::all();
        $product_detail = ProductDetail::all();
        // dd($product, $categories, $product_detail);
        return view('backend.pages.Pdetail', compact('product', 'categories', 'product_detail'));


    }

    //product add
    public function product_add()
    {
        $pddetail = ProductCategories::all();
        // dd($pddetail);
        return view('backend.pages.Padd', compact('pddetail'));
    }

    public function product_detail($id)
    {
        $product = DB::table('products')->join('product_details', 'products.id', '=', 'product_details.product_id')->where('products.id', $id)->select('products.*', 'product_details.*')->first();
        return view('backend.pages.Pdetail', compact('product'));
    }

    public function product_save(Request $req)
    {
        $req->validate([
            ($validatedData = $req->validate([
                // 'pdtitle' => 'required|max:255',
                // 'id' => 'required|integer',
                // 'desc' => 'required',
                // 'detail' => 'required',
                // 'sku' => 'required',
                // 'barcode' => 'required',
                // 'quantity' => 'required',
                // 'tax_excluded' => 'required',
                // 'tax_included' => 'required',
            ])),
        ]);
        $data = [
            'pdtitle' => $req->pdtitle,
            'id' => $req->id,
            'desc' => $req->desc,
            'detail' => $req->detail,
            'sku' => $req->sku,
            'barcode' => $req->barcode,
            'quantity' => $req->quantity,
            'allow_out_of_stock_purchase' => $req->allow_out_of_stock_purchase,
            'notify_low_stock' => $req->notify_low_stock,
            'display_quantity_at_storefront' => $req->display_quantity_at_storefront,
            'standard_shipping' => $req->standard_shipping,
            'express_shipping' => $req->express_shipping,
            'priority_shipping' => $req->priority_shipping,
            'tax_excluded' => $req->tax_excluded,
            'tax_included' => $req->tax_included,
            'attribute_names.*' => $req->attribute_names, // Validate each attribute name
            'attribute_values.*' => $req->attribute_values, // Validate each attribute value 
        ];
        $pddetail = ProductCategories::all();

        dd($data);
        return view('backend.pages.Padd', compact('pddetail'));
    }

    public function dis()
    {
        return view('backend.pages.Discount');
    }
}
