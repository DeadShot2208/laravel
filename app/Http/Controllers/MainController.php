<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\ProductController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MainController extends Controller
{
//    Отображение категорий и товаров на главной странице
    public function home() {
        $categries = Category::all()->take('4');
        $products = Product::get()->random('5');
        return view('pages.home', [
            'categoris' => $categries,
            'products' => $products
        ]);
    }
//    Отображение категорий и товаров в каталоге
    public function katalog() {
        $categries = Category::orderBy('title')->get();
        $products = Product::paginate(5);
        return view('pages.katalog', [
            'categories' => $categries,
            'products' => $products
        ]);
    }

    public function getByCategory($slug){
        $categries = Category::orderBy('title')->get();
    $current_category = Category::where('slug',$slug)->first();
        return view('pages.katalog', [
            'categories' => $categries,
            'products' => $current_category->products()->paginate(5),
        ]);
    }

    public function kontact() {
        return view('pages.kontact', [
        ]);
    }

    public function info() {
        return view('pages.info', [
        ]);
    }

    public function profile() {
        return view('profile.profile', [
        ]);
    }

    public function basket() {
        return view('pages.basket', [
        ]);
    }

    public function checkout() {
        return view('pages.checkout', [
        ]);
    }

    public function favorites(){
        return view('pages.favorites' ,[
            ]);
    }

    public function order() {
        return view('profile.order', [
        ]);
    }

    public function orders() {
        return view('admin.orders', [
        ]);
    }

    public function getPost($slug_category, $slug_product) {
        $product = Product::where('slug', $slug_product)->first();
        return view('pages.product',[
            'product' => $product
            ]);

    }

    public function login() {
        return view('pages.login', [
        ]);
    }

    public function admin() {
        return view('admin.index', [
        ]);
    }

    public function user() {
        return view('admin.user', [
        ]);
    }
//    Отображение категорий в админке
    public function categories() {
        $category = Category::paginate(5);
        return view('admin.category',[
            'category'=>$category
            ]);
    }

    public function add_category() {
        return view('admin.add.add_category');
    }

    public function edit_category($id) {
        $category = Category::where('id',$id)->get();
        return view('admin.edit.edit_category',[
            'category'=>$category
        ]);
    }
//    Отображение товаров в админке
    public function products() {
        $product = Product::paginate(5);
        return view('admin.product', [
            'product'=>$product
        ]);
    }

    public function add_product() {
        $category = Category::all();
        return view('admin.add.add_product',[
            'category'=>$category
        ]);
    }

    public function edit_product($id) {
        $category = Category::all();
        $product = Product::where('id',$id)->get();
        return view('admin.edit.edit_product',[
            'product'=>$product,
            'category'=>$category
        ]);
    }

    public function logout(){
        if (Auth::check()){
            Auth::logout();
        }
        return redirect()->intended(route('home'));
        }
}
