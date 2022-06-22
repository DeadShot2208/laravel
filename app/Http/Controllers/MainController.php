<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\ProductController;
use App\Models\Basket;
use App\Models\Category;
use App\Models\Favourites;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MainController extends Controller
{
//    Отображение категорий и товаров на главной странице
    public function home()
    {
        $categries = Category::take('4')->get();
        $products = Product::inRandomOrder(5)->get();
        return view('pages.home', [
            'categoris' => $categries,
            'products' => $products
        ]);
    }

//    Отображение категорий и товаров в каталоге
    public function katalog()
    {
        $categries = Category::orderBy('title')->get();
        $products = Product::paginate(5);
        return view('pages.katalog', [
            'categories' => $categries,
            'products' => $products
        ]);
    }

    public function getByCategory($slug)
    {
        $categries = Category::orderBy('title')->get();
        $current_category = Category::where('slug', $slug)->first();
        return view('pages.katalog', [
            'categories' => $categries,
            'products' => $current_category->products()->paginate(5),
        ]);
    }

    public function kontact()
    {
        return view('pages.kontact', [
        ]);
    }

    public function info()
    {
        return view('pages.info', [
        ]);
    }

    public function profile()
    {
        return view('profile.profile', [
        ]);
    }


    public function checkout()
    {
        return view('pages.checkout', [
        ]);
    }

    public function favorites()
    {
        return view('pages.favorites', [
            'favorites' => Favourites::where('users_id', \auth()->id())->get()
        ]);
    }

    public function order()
    {
        return view('profile.order', [
            'orders' => Order::where('users_id', \auth()->id())->get()
        ]);
    }

    public function orders()
    {
        return view('admin.orders', [
        ]);
    }

    public function getPost($slug_category, $slug_product)
    {
        $product = Product::where('slug', $slug_product)->first();
        return view('pages.product', [
            'product' => $product
        ]);

    }

    public function login()
    {
        return view('pages.login', [
        ]);
    }

    public function admin()
    {
        return view('admin.index', [
        ]);
    }

    public function user()
    {
        return view('admin.user', [
        ]);
    }

//    Отображение категорий в админке
    public function categories()
    {
        $category = Category::paginate(5);
        return view('admin.category', [
            'category' => $category
        ]);
    }

    public function add_category()
    {
        return view('admin.add.add_category');
    }

    public function edit_category($id)
    {
        $category = Category::where('id', $id)->get();
        return view('admin.edit.edit_category', [
            'category' => $category
        ]);
    }

//    Отображение товаров в админке
    public function products()
    {
        $product = Product::paginate(5);
        return view('admin.product', [
            'product' => $product
        ]);
    }

    public function add_product()
    {
        $category = Category::all();
        return view('admin.add.add_product', [
            'category' => $category
        ]);
    }

    public function edit_product($id)
    {
        $category = Category::all();
        $product = Product::where('id', $id)->get();
        return view('admin.edit.edit_product', [
            'product' => $product,
            'category' => $category
        ]);
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
        }
        return redirect()->intended(route('home'));
    }

    public function basket()
    {
        return view('pages.basket', [
            'baskets' => Basket::where('users_id', \auth()->id())->get()
        ]);
    }

    public function basketAdd(Product $product)
    {
        $basket = Basket::where([['users_id', \auth()->id()], ['products_id', $product->id]])
            ->first();

        if ($basket) {
            $basket->count++;
            $basket->price = $basket->count * $product->price;
            $basket->save();
        } else {
            $basketCreate = new Basket();
            $basketCreate->users_id = auth()->id();
            $basketCreate->products_id = $product->id;
            $basketCreate->count = 1;
            $basketCreate->price = $product->price;
            $basketCreate->save();
        }

        return redirect(route('basket'));
    }

    public function basketMin(Product $product)
    {
        $basket = Basket::where([['users_id', \auth()->id()], ['products_id', $product->id]])
            ->first();

        $basket->count--;
        if($basket->count == 0) {
            $basket->delete();
        } else {
            $basket->price = $basket->count * $product->price;
            $basket->save();
        }

        return redirect(route('basket'));

    }

    public function basketDelete(Basket $basket)
    {
        $basket->delete();
        return redirect()->back();
    }

    public function basketAllDelete()
    {
        Basket::where('users_id', \auth()->id())
            ->delete();
        return redirect()->back();
    }

    public function orderPost(Request $request)
    {
        $basketQ = Basket::where('users_id', \auth()->id());

        $baskets = $basketQ->get();

        $order = Order::create([
            'users_id' => \auth()->id(),
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'count' => $baskets->sum('count'),
            'total_sum' => $baskets->sum('price'),
            'comment' => $request->comment,
        ]);

        foreach ($baskets as $basket) {
            OrderItems::create([
                'order_id' => $order->id,
                'product_id' => $basket->products_id,
                'count' => $basket->count,
                'price' => $basket->price,
            ]);
        }

        $basketQ->delete();

        return redirect(route('order'));
    }

    public function favouritesStore(Product $product)
    {
        $favourite = Favourites::where([
            ['users_id', \auth()->id()],
            ['products_id', $product->id]
        ])->first();

        if ($favourite == null) {
            Favourites::create([
                'users_id' => \auth()->id(),
                'products_id' => $product->id,
            ]);
        }


        return redirect(route('favorites'));
    }

    public function favouriteDelete(Product $product)
    {
        Favourites::where([
            ['users_id', \auth()->id()],
            ['products_id', $product->id]
        ])->delete();

        return redirect(route('favorites'));
    }


}
