<?php

namespace App\Http\Controllers;

//import model product
use App\Models\Product; 

//import return type View
use Illuminate\View\View;

//import return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Http Request
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        //get all products
        $products = Product::latest()->paginate(10);

        //render view with products
        return view('products.index', compact('products'));
    }

    /**
     * create
     *
     * @return View
     */
    public function daftar(): View
    {
        return view('products.daftar');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store (Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'username'         => 'required|min:5',
            'password'   => 'required|min:10',
            'email'         => 'required|email',
        ]);


        //create product
        Product::daftar([
            'username'         => $request->username,
            'password'   => $request->password,
            'email'         => $request->email,
        ]);

        //redirect to index
        return redirect()->route('products.index')->with(['success' => 'Data Anda Berhasil Disimpan!']);
    }
}
