<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SalesController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            "title" => ["required", "string"],
            "description" => ["required", "string"],
            "category" => ["required", "integer"],
            "phone" => ["required", "string"],
            "price" => ["required"],
            "image" => ["required", "mimes:png,jpg,jpeg", "max:4000"]
        ]);

        $image_path = "/storage/" . $request->image->store("images", "public");

        Sale::create([
            "title" => $request->title,
            "description" => $request->description,
            "category_id" => $request->category,
            "phone" => $request->phone,
            "price" => $request->price,
            "user_id" => Auth::id(),
            "image" => $image_path
        ]);

        return redirect()->route('my-sales');
    }

    public function publicSale($id)
    {
        $sale = Sale::find($id);

        if (is_null($sale)){
            return abort(404);
        }

        $sale->public = (int)$sale->public === 1 ? 0 : 1;
        $sale->save();

        return redirect()->back();
    }
}
