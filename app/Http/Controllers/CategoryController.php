<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\URL;

class CategoryController extends Controller
{
    public function getListCategory()
    {
        $listCategory = Category::all();
        $sidebar = "";
        $option = "<option>Tất cả</option>";

        foreach ($listCategory as $category) {
            $sidebar .= '<li><a href="' . URL::to('category/' . $category->id) . '">' . $category->name . '</a></li>';
            $option .= '<option>' . $category->name . '</option>';
        }
        return response()->json(['sidebar' => $sidebar, 'option' => $option]);
    }

    public function getListProductByCategory($id)
    {
        $listProduct = Category::find($id)->load('product');
        $listProduct = $listProduct->product()->paginate(3);
        $nameCategory = Category::find($id)->name;
        
        return view('product.product')->with([
            'listProduct'  => $listProduct,
            'nameCategory' => $nameCategory,
            'quantity'     => count($listProduct),
        ]);
    }
}
