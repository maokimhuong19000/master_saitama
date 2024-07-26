<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   use HasFactory;
   protected $table = 'products';
   protected $primaryKey = 'id';
   protected $fillable = [
      'title',
      'category_id',
      'description',
      'details',
      'sku',
      'barcode',
      'quantity',
      'allow_out_of_stock_purchase',
      'notify_low_stock',
      'display_quantity_at_storefront',
      'standard_shipping',
      'express_shipping',
      'priority_shipping',
      'tax_excluded',
      'tax_included',
     
  ];
}
