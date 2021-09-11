<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Company;
use Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $products =  Product::all();
            //$products =  Product::with('company')->findOrFail(120);
            if ($products) {
                return response()->json(['products' => $products, 'message' => 'success  !!'], 200);
            } else {
                return response()->json([['error' => 'Unauthorized', 'message' => 'error !!'], 401]);
            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $product =  Product::with('company')->findOrFail($id);
        if ($product) {
        return response()->json(['product' => $product, 'message' => 'success  !!'], 200);
        } else {
            return response()->json([['error' => 'Unauthorized', 'message' => 'error !!'], 401]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product =  Product::with('company')->findOrFail($id);
        $companies = Company::all();
        if ($product) {
        return response()->json(['product' => $product, 'companies'=>$companies, 'message' => 'success  !!'], 200);
        } else {
            return response()->json([['error' => 'Unauthorized', 'message' => 'error !!'], 401]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

         /* $request->validate([
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',
            'company'=>'required',

        ]); */



        if($request->get('image')){
           $image = $request->get('image');
           $name = time().'.'.explode('/', explode(':', substr($image,0,strpos($image,';')))[1])[1];

           \Image::make($request->get('image'))->save(public_path('images/').$name);
        }

        $product = Product::findOrFail($id);
        $product->name =e($request->name);
        $product->company_id =e($request->company);
        $product->description = e($request->description);
        $product->price = e($request->price);
        $product->image= $name;
        $product->update();


        return response()->json(['product' => $product, 'message' => 'updated!!'], 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Product::findOrFail($id);
        $user->delete();
        return response()->json('Product deleted successfully', 204);
    }
}
