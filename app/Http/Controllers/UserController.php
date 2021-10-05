<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Validation\Rule;
use Storage;
use App\Images;
use Image;
use Auth;

class UserController extends Controller

{

    public function __construct(){
        $this->middleware('auth')->except('welcome');
    }

    public function update(Request $request, $id){

        $useredit = User::find($id);
        $useredit->name=$request->input('name');
        $useredit->last_name=$request->input('last_name');
        $useredit->email=$request->input('email');
        $useredit->phone_no=$request->input('phone_no');
        $useredit->city=$request->input('city');
        $useredit->nationality=$request->input('nationality');
        $useredit->educational_level=$request->input('educational_level');
        $useredit->educational_body=$request->input('educational_body');
        $useredit->DB=$request->input('DB');
        $useredit->place_of_birth=$request->input('place_of_birth');
        $useredit->gender=$request->input('gender');
        if ($request->hasFile('image')){

           User::uploadAvatar($request->image);
        }
        $useredit->save();
        return redirect()->back()->with('message', 'تم تحديث بياناتك بنجاح');

    }


    public function test_details()
    {
        return view('test-details');
    }
    public function test()
    {
        return view('test');
    }
    public function test_next()
    {
        return view('test-next');
    }
    public function test_result()
    {
        return view('test-result');
    }

    public function payment()
    {
        return view('payment');
    }
    public function admin_profile()
    {
        $users = User::all();
        return view('admin-profile',compact('users'));
    }




}
