<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;

class ProductController extends Controller
{
    public function getProducts() {
        $data = Product::where('status',1)->orderBy('id', 'DESC')->paginate(12);
        return view('front/products', compact('data'));
    }

    public function getProductCategory($id) {
        $data = Product::select('products.*','product_categories.name')
                ->leftJoin('product_categories','product_categories.id','=','products.cat_id')
                ->where('product_categories.slug',$id)
                ->orderBy('products.id', 'DESC')
                ->paginate(12);
    
        $catname = ProductCategory::where('slug',$id)->first();
    
        return view('front/product-category', compact('data','catname'));
    }

    public function findProductSearch(Request $request){
        // $this->validate($request, [
        // 'q'=>'required'
        // ]);
        $search = $request->input('q');
        $q = urlencode($search);
        return redirect('shop/search?q='.$q);
    }

    public function productSearch(Request $request){
        $q = $request->get('q');
        $data = Product::where ( 'pname', 'LIKE', '%' . $q . '%' )->orWhere ( 'description', 'LIKE', '%' . $q . '%' )->paginate(12);
        return view('front/product-search', compact('data','q'));
    }

    public function getDetails($id) {
        $product = Product::where('slug',$id)->first();
        return view('front/product-details', compact('product'));
    }
}
