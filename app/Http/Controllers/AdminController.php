<?php

namespace App\Http\Controllers;

use App\Emptycar;
use App\Luggage;
use App\User;
use App\Mail_manage;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class AdminController extends Controller
{
    public function index(){
        $page_title = "Dashboard";

        $total_user = User::count('id');

        $total_emptycar = Emptycar::count('id');

        $total_luggage = Luggage::count('id');

        return view('backend.dashboard',compact('page_title',
            'total_user',
            'total_emptycar',
            'total_luggage'));
    }

    public function saveResetPassword(Request $request)
    {
        return redirect()->back()->withdel('Demo Version, Change Not Possible');
        $this->validate($request, [

            'passwordold' =>'required',

            'password' => 'required|min:5|confirmed'

        ]);

        try {

            $c_password = Admin::find($request->id)->password;

            $c_id = Admin::find($request->id)->id;

            //return  $c_password;

            $user = Admin::findOrFail($c_id);

            if(Hash::check($request->passwordold, $c_password)){

                $password = Hash::make($request->password);

                $user->password = $password;

                $user->save();

                return redirect()->back()->withMsg('Password Changes Successfully.');

            }else{

                session()->flash('message', 'Password Not Match');

                Session::flash('type', 'warning');

                return redirect()->back();

            }

        } catch (\PDOException $e) {

            session()->flash('message', 'Some Problem Occurs, Please Try Again!');

            Session::flash('type', 'warning');

            return redirect()->back();

        }

    }
}
