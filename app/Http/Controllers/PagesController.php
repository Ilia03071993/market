<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['createSale', 'mySales']);
    }

    public function home(Request $request)
    {
        $sales = is_null($request->q) ? Sale::where('public', 1)-> latest()->paginate(4) : Sale::latest()->where('title', 'LIKE', "%$request->q%")->paginate(4);

        return view('home', [
            "sales" => $sales
        ]);
    }

    public function createSale()
    {
        return view('create-sale', [
            "phone" => Auth::user()->phone,
            "categories" => Category::all()
        ]);
    }

    public function mySales()
    {
        return view('my-sales', [
            "sales" => Sale::where('user_id', Auth::id())->get()
        ]);
    }

    public function sale($id)
    {
        $sale = Sale::find($id);
        if (is_null($sale)) {
            return abort(404);
        }
        return view('sale', [
            "sale" => $sale
        ]);
    }
}
