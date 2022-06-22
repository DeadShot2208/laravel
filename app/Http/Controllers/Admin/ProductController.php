<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $path = $request->file('image')->store('product','public');
        $image = $path;
        $title = $request->input('title');
        $subcontent = $request->input('subcontent');
        $content = $request->input('content');
        $author = $request->input('author');
        $price = $request->input('price');
        $category_id = $request->input('category_id');
        $slug = $request->input('slug');

        $product = new Product();
        $product->title = $title;
        $product->subcontent = $subcontent;
        $product->content = $content;
        $product->author = $author;
        $product->price = $price;
        $product->image = $image;
        $product->category_id = $category_id;
        $product->slug = $slug;

        $product->save();
        return redirect(route('products'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $path = $request->file('image')->store('product','public');
        $image = $path;
        $title = $request->input('title');
        $subcontent = $request->input('subcontent');
        $content = $request->input('content');
        $author = $request->input('author');
        $price = $request->input('price');
        $category_id = $request->input('category_id');
        $slug = $request->input('slug');

        $product = Product::find($id);
        $product->title = $title;
        $product->subcontent = $subcontent;
        $product->content = $content;
        $product->author = $author;
        $product->price = $price;
        $product->image = $image;
        $product->category_id = $category_id;
        $product->slug = $slug;

        $product->save();
        return redirect(route('products'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        product::where('id', $id)->delete();
        return redirect(route('products'));

    }
}

