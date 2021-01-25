<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    // public function __construct()
    // {
       
    //     $this->middleware('auth:admin');
    // }    
    use RegistersUsers;
    public function index()
    {
        $employee = User::orderBy('id', 'DESC')->Paginate(10);
        $search = '';
        return view('backend.employee.employee-list', compact('employee','search'));        
    }

    public function show(Request $request, $id)
    {
        $user = User::find($id);

        return response()->json(
            [
                'status' => 'success',
                'user' => $user->toArray()
            ], 200);
    }

    public function employeeUpdate(Request $request, $id){
        $update_employee = User::find($id);
        $this->validate($request, array(
            'member_id'       => 'required|max:191',
            'corp_name' => 'required',
            'post_address'     => 'required|max:191',
        ));
        $update_employee->member_id = $request->member_id;
        $update_employee->corp_name = $request->corp_name;
        $update_employee->post_address = $request->post_address;
        $update_employee->tel = $request->tel;
        $update_employee->fax = $request->fax;
        $update_employee->email_address = $request->email_address;
        $update_employee->contact_address = $request->contact_address;
        $update_employee->save();
        return back()->withMsg("正常に更新されました。");        
    }
    public function employeeDestroy($id){
        // echo "sfdsd"; exit;
        $delete_employee = User::find($id);
        $delete_employee->delete();
        return back()->withMsg("正常に削除されました。");
        // return redirect('/admin/employ/search');
    }
    public function adminSearch(Request $request)
    {
        $employee1 = User::query();
        $search = $request->search;
        $employee1->where('member_id', 'LIKE', '%' .$search. '%');
        $employee1->orwhere('corp_name', 'LIKE', '%' .$search. '%');
        $employee1->orwhere('post_address', 'LIKE', '%' .$search. '%');
        $employee1->orwhere('tel', 'LIKE', '%' .$search. '%');
        $employee1->orwhere('fax', 'LIKE', '%' .$search. '%');
        $employee1->orwhere('email_address', 'LIKE', '%' .$search. '%');
        $employee1->orwhere('contact_address', 'LIKE', '%' .$search. '%');
        $employee = $employee1->Paginate(10);
        // var_dump($employee); exit;
        return view('backend.employee.employee-list', compact('employee','search'));        

        // $emptycar = Emptycar::query();
        // if(!empty($request->get('start_date') && $request->get('end_date'))){
        //     $emptycar->whereBetween('emptycar_date', [$request->get('start_date'), $request->get('end_date')]);
        // }
        // if(!empty($request->get('urgent_matter'))){
        //     $emptycar->where('urgent_matter', 'LIKE', $request->get('urgent_matter'));
        // }
        // if(!empty($request->get('emptycar_time'))){
        //     $emptycar->where('emptycar_time', '>=', $request->get('emptycar_time'));
        // }
        // if(!empty($request->get('emptycar_space'))){
        //     $emptycar->where('emptycar_space', 'LIKE', $request->get('emptycar_space'));
        // }
        // return response()->json('Successfully Deleted');
    }
}
