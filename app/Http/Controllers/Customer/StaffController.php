<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = User::query()->where('user_type','staff')->orderBy('id','desc')->get();

        return view('customer.staffs.index',compact('staffs'));
    }


    public function create()
    {

    }


    public function store(Request $request,$id)
    {
        $this->authorize('view', User::class);

        $staff = User::find($id);
       $input= $staff->update([
           "user_type"=>"staff",
        ]);
       return response([
          'data'=> $input
       ]);

    }


    public function show(User $staff)
    {
    }


    public function edit(Request $request)
    {

    }


    public function update(Request $request)
    {

    }


    public function destroy($id)
    {

        $this->authorize('view', User::class);

        $staff = User::find($id);
        $input= $staff->update([
            "user_type"=>"customer",
        ]);
        return response([
            'data'=>  'از لیست کارکنان با موفقیت حذف شد.',
            'success' => 'ok'
        ]);
    }
}
