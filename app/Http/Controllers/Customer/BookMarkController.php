<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Bookmark;
use Illuminate\Http\Request;

class BookMarkController extends Controller
{

    public function index()
    {
       $user= auth()->user();
       return view('customer.bookmarks.index',compact('user'));
    }

    public function store($id)
    {
        Bookmark::create([
            'user_id'=>auth()->id(),
            'item_id'=>$id,
        ]);
        return response([
            'data'=>'save successfully',
        ]);
    }

    public function delete($id)
    {
        $bookmark= Bookmark::find($id);
        $bookmark->delete();

        return response([
            'data'=>'delete successfully',
        ]);
    }

}
