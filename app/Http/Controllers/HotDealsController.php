<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Resources\Product\ProductCollection;

class HotDealsController extends Controller
{
    public function heroData()
    {
<<<<<<< HEAD
        $product = Product::where('hot_deal', 1)->orderBy('id', 'desc')->take(4)->get();
=======
        $product = Product::where('hot_deal', 1)->orderBy('name', 'asc')->take(4)->get();
>>>>>>> 8575311f873dcc06be500242997626364b16b31f

        return new ProductCollection($product);
    }
}
