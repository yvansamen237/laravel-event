<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index(Request $request)
    {

        $products = Product::all();
        if ($request->wantsJson()) {
            return response()->json(["product_list" => $products]);
        }
        return view("product.index", compact('products'));
    }

    public function create()
    {
        return view("product.create");
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);
        if ($validator->fails()) {
            Toastr::error('Veillez verifier tous les champs', '', ["positionClass" => "toast-top-right"]);
            return back();
        }
       /* try {*/
            $product = new Product();
            $product->name = $request->name;
            $product->price = $request->price;
            $product->quant = $request->quantity;
            $product->description = $request->description;
            $product->save();
            Toastr::success('Enregistrement effectue', 'Message', ["positionClass" => "toast-top-center"]);
     /*   } catch (\Exception $ex) {
            Toastr::error('an error occured', '', ["positionClass" => "toast-top-right"]);
        }
        return back();*/
        return back();
    }

    public function edit($id)
    {
        $product = Product::find($id);
        if ($product != null) {
            return view("product.create", compact("product"));
        }
        return back();
    }

    public function update(Request $request)
    {
        $product = Product::find($request->id);
        if ($product == null) {
            return back();
        }
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->save();
        return redirect("/index");
    }

    public function delete($id)
    {
        Product::find($id)->delete();
        return back();
    }


}
