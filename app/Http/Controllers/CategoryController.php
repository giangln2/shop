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
        $result = "";
        $option = "<option>Tất cả</option>";

        foreach ($listCategory as $category) {
            $result.= '<li><a href="'.URL::to('category/'.$category->id).'">'. $category->name .'</a></li>';
            $option.= '<option>'.$category->name.'</option>';
        }
        return response()->json(['result' => $result, 'option' => $option]);
    }

    public function getListProductByCategory($id)
    {
        $listProduct = Category::find($id)->load('product');
        $nameCategory = Category::find($id)->name;
//        dd($listProduct->product);
        return view('product.product')->with(['listProduct' => $listProduct->product()->paginate(2), 'nameCategory' => $nameCategory]);
    }
}
