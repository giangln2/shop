<?php

namespace App\Http\Controllers\Product;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class SearchProductController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->get('srchTxt');
        $optCategory = $request->get('optTxt');

        if ($optCategory) {
            $listProduct = Product::where('category_id', '=', $optCategory)->where(function($query) use ($search) {
                $query->where('name', 'like', "%$search%")->orWhere('description', 'like', "%$search%");
            })->get();
        } else {
            $listProduct = Product::where('name', 'like', "%$search%")->orWhere('description', 'like', "%$search%")->get();
        }

        return view('product.search_product')->with(['listProduct' => $listProduct]);
    }
}
