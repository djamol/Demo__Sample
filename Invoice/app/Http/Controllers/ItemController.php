<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;
class ItemController extends Controller
{
    public function store(Request $request)
    {
        $item = new Item([
          'name' => $request->get('name'),
          'price' => $request->get('price'),
          'desc' => $request->get('desc')
        ]);
        $item->save();
        return response()->json(['status'=>'Successfully added']);
    }
    public function get(Request $request)
    {
        $item = Item::select('id','name','price','desc')->get();
        return response()->json(['data'=>$item,'status'=>'Successfully fetch']);
    }
}
