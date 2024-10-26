<?php

namespace App\Http\Controllers;


use App\Models\products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Products = products::latest()->get();
        // dd($Products);

        return view('Product.index', [
            'products' => $Products
        ]);
    }

     /**
     * Display a About Page.
     */
    public function about()
    {
        return view('Product.about');
    }

       /**
     * Display a products Page.
     */

    public function products()
    {
        $allproducts = products::all();

        // dd($allproducts);

        return view('Product.products', [
            'allproducts' => $allproducts
        ]);
    }

         /**
     * Display a contact Page.
     */
    public function contact()
    {
        return view('Product.contact');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
