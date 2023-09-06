<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $items= Item::query()->where('status','active')->orderBy('id','desc')->take(6)->get();

        $item= Item::where('is_vip',1)->orderBy('id','desc')->first();

        return view('welcome',compact('item','items'));
    }

}
