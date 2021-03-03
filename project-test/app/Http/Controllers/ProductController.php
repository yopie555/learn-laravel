<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index(Request $request){
        // $productId = $request->input('id');
        // $productName = $request->input('product_name');
        // $productCategory = $request->input('product_category');
        return 'ini index coy';
    }

    public function save(Request $request){
        // $productId = $request->input('id');
        // $productName = $request->input('product_name');
        // $productCategory = $request->input('product_category')
        if($request->input('name')){
            return response("simpan berhasil", 201);
        }else{
            return 'ini method post';
        }
    }
    
    public function edit(Request $request){
        // $productId = $request->input('id');
        // $productName = $request->input('product_name');
        // $productCategory = $request->input('product_category')
        return 'ini method put';
    }

    public function delete($id,$tester){
        return $id.'ini method delete'.$tester;
    }
}
