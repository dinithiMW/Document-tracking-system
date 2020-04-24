<?php

namespace App\Http\Controllers\Admin;
use\App\User;
use\App\Scand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
   public function registered(){
       $users = User::all();
       return view('admin.register')->with('users',$users);
   }
   public function registeredit(Request $request, $id){
      $users =User::findOrFail($id);
      return view('admin.register-edit')->with('users',$users);
   }

   public function registerupdate(Request $request, $id){
      $users =User::find($id);
     $users->name = $request->input('username');
    $users->usertype = $request->input('usertype');
    $users->update();
    return redirect('/role-register')->with('status','Your Data is updated');
      
    
    
   }
   public function delete(Request $request, $id){
      $users = User::find($id);
      $users->delete();
      return redirect('/role-register')->with('status','Your Data is deleted');
   }
   public function registeredbarcode(){
      //$scands =DB::table('users'->count);
      $barcodes =Scand::all()->count();
   return view('admin.dashboard')->with('barcodes',$barcodes);
    
      
   }
   
      
  }
  
      
    
  /*
  public function registeredbarcode(){
   //$scands =DB::table('users'->count);
   
 
   
}
   
  /* public function registeredAdmin(){
      $users = User::all();
      return view('auth.register')->with('users',$users);
  }
   
   public function register(Request $request){
      $this->validate($request,[
        
          'name' =>'required',
          'phone' =>'required',
          'branchname' =>'required',
          'email' =>'required',
          'password' =>'required',
     
          ]);
          $user = new User;
          $user-> name =$request->input('name');
          $user-> phone =$request->input('phone');
          $user-> branchname =$request->input('branchname');
          $user-> email =$request->input('email');
          $user-> password =$request->input('password');
          $user->save();
     
      return redirect('dashboard')->with('status','Document Scan Successfully');
   }*/


