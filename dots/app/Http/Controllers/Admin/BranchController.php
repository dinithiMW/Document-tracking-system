<?php

namespace App\Http\Controllers\Admin;
use\App\Branch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BranchController extends Controller
{
    public function branch(){
        return view('admin.branch');
    }
    public function addNewBranch(Request $request){  //request help to the refering the text box
        //return $request->input('branch');  //branch-->text field name
        $this->validate($request,[
           'branch' =>'required',
           'phone' => 'required',
           'email' => 'required',
        ]);
        $branch = new Branch;
        $branch->branch_name = $request->input('branch');
        $branch->phone = $request->input('phone');
        $branch->email = $request->input('email');
        $branch->save();
        return view('admin.dashboard');
    }
    public function registered(){
        $branches = Branch::all();
        return view('admin.branch')->with('branches',$branches);
    }
    public function registeredit(Request $request, $branch_id){
        $branches =Branch::findOrFail($branch_id);
        return view('admin.branch-edit')->with('branches',$branches);
     }

     public function registerupdate(Request $request, $branch_id){
        $branches =Branch::find($branch_id);
        $branches->branch_name = $request->input('username');
        $branches->phone = $request->input('phone');
        $branches->email = $request->input('email');
        $branches->update();
        return redirect('branch')->with('response','Your Data is updated');
       }
}
