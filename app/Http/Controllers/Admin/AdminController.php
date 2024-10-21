<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\FlashSale;
use App\Models\Distributor;

class AdminController extends Controller
{
    public function dashboard()
    {
        $products = Product::count();
        $users = User::count();
        $distributors = Distributor::count();
        $flashsales = FlashSale::count(); // Tambahkan semicolon di sini

        // Pastikan variabel compact sesuai dengan nama variabel yang didefinisikan
        return view('pages.admin.index', compact('products', 'users', 'distributors', 'flashsales'));
    }
}
