<?php

namespace App\Http\Controllers\CoAdmin;
use\App\Document;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use\App\Scand;
use Auth;
use\App\User;
use\App\Applied;
use\App\Agriculture;
use\App\Geo;
use\App\Technology;
use\App\Managment;
use\App\Social;
use\App\Vcoffice;
use Yajra\Datatables\Data;

class ViewDocumentController extends Controller
{
   /* public function addDocument(){
        return view('coadmin.viewdocument');
    }

    public function addNewDocument(Request $request){
        // dd($request->all());
         $this->validate($request,[
             'document_name' =>'required',
             'barcode' =>'required',
             'date' =>'required',
             'sender_branch_name' => 'required',
             'receiver_branch_name' => 'required',
 
             ]);
         $document = new Document;
     $document->file_name = $request->input('document_name');
         $document->barcode = $request->input('barcode');
         $document->date = $request->input('date');
         $document->sender_branch_name = $request->input('sender_branch_name');
         $document->receiver_branch_name = $request->input('receiver_branch_name');
         $document->save();
         return view('home')->with('response','Document Added Successfully');
 }
 public function sentDocument(){
    return view('coadmin.sentdocument');
 }
 public function receiveddocument(){
    return view('coadmin.receiveddocument');
 }*/
public function registered(){
    $documents = Document::all();
    return view('coadmin.viewdocument')->with('documents',$documents);
}

/*public function registeredit(Request $request, $file_id){
    $documents =Document::findOrFail($file_id);
    return view('co admin.document-edit')->with('documents',$documents);
 }
 public function registerupdate(Request $request, $file_id){
    $documents =Document::find($file_id);
    $documents->file_name = $request->input('name');
    
    $documents->update();
    return redirect('viewdocument')->with('response','Your Data is updated');
   }

   public function scanBarcode(){
    return view('coadmin.scanbarcode');
    $this->validate($request,[
        'document_name' =>'required',
        'barcode' =>'required',
        'date' =>'required',
        'sender_branch_name' => 'required',
        'receiver_branch_name' => 'required',

        ]);
    $document = new Document;
$document->file_name = $request->input('document_name');
    $document->barcode = $request->input('barcode');
    $document->date = $request->input('date');
    $document->sender_branch_name = $request->input('sender_branch_name');
    $document->receiver_branch_name = $request->input('receiver_branch_name');
    $document->save();
    return view('home')->with('response','Document Added Successfully');
}*/

public function scand(Request $request){
    $this->validate($request,[
      
        'barcode' =>'required',
   
        ]);
        $scand = new Scand;
        $scand-> user_id =Auth::user()->id;
        $scand-> branch_name =Auth::user()->branchname;
        $scand-> barcode =$request->input('barcode');
        $scand->save();

        if(Auth::user()->branchname == 'applied'){
            $applied = new Applied;
            $applied-> barcode =$request->input('barcode');
            $applied->save();
        }
        elseif(Auth::user()->branchname == 'agriculture'){
            $agriculture = new Agriculture;
            $agriculture-> barcode =$request->input('barcode');
            $agriculture->save();
        
        }
        elseif(Auth::user()->branchname == 'managment'){
            $managment = new Managment;
            $managment-> barcode =$request->input('barcode');
            $managment->save();
        
        }
        elseif(Auth::user()->branchname == 'social'){
            $social = new Social;
            $social-> barcode =$request->input('barcode');
            $social->save();
        
        }
        elseif(Auth::user()->branchname == 'technology'){
            $technology = new Technology;
            $technology-> barcode =$request->input('barcode');
            $technology->save();
        
        }
        elseif(Auth::user()->branchname == 'geo'){
            $geo = new Geo;
            $geo-> barcode =$request->input('barcode');
            $geo->save();
        
        }
        elseif(Auth::user()->branchname == 'VCoffice'){
            $VCoffice = new Vcoffice;
            $VCoffice-> barcode =$request->input('barcode');
            $VCoffice->save();
        
        }
        else{
            
        
        }
       
    //return view('coadmin.viewdocument')->with('status','Document Scan Successfully');
    return redirect('/viewdocument')->with('status','Document Scan Successfully');

}
public function registeredscan(){
    $scands =Scand::orderBy('id','desc')->take(10)->get();
    return view('home')->with('scands',$scands);
}
public function changeProfile(Request $request, $id){
    $users =User::findOrFail($id);
      return view('coadmin.profile_edit')->with('users',$users);
}
public function profileupdate(Request $request, $id){
    $users =User::find($id);
    $users->name = $request->input('username');
    $users->phone = $request->input('phone');
    $users->email = $request->input('email');
    $users->update();
    return redirect('/home')->with('status','Your Data is deleted');
    
   }
   
    public function search(Request $request){
        //if($request->get('search')){
        $search = $request->get('search');
        $search2 = $request->get('search');
        $branch_name=Auth::user()->branchname;
        // $scands = Scand::where('barcode', 'like', '%'.$search.'%')->paginate(5);
        $scands = Scand::where('barcode',  'like', '%'.$search.'%')->orderBy('id','desc')->paginate(15);
        $scands2 = Scand::where('barcode',  'like', '%'.$search.'%')->orderBy('id','desc')->paginate(1);
        //$scands = Scand::where('branch_name', 'like', '%'.$branch_name.'%');
        return view('Coadmin.search',['scands'=> $scands],['scands2'=> $scands2]);
        //}
        
        //else{
           // return view('coadmin.chart');
        //}
        
     
   }

 


public function scanfile(){
    $documents = Document::all();
    
    if(Auth::user()->branchname == 'applied'){
        $documents = Applied::all();
    }
    elseif(Auth::user()->branchname == 'agriculture'){
        $documents = Agriculture::all();
        
    
    }
    elseif(Auth::user()->branchname == 'managment'){
        $documents = Managment::all();
       
    
    }
    elseif(Auth::user()->branchname == 'social'){
        $documents = Social::all();
        
    
    }
    elseif(Auth::user()->branchname == 'technology'){
        $documents = Technology::all();
        
    
    }
    elseif(Auth::user()->branchname == 'geo'){
        $documents = Geo::all();
        
    
    }
    elseif(Auth::user()->branchname == 'VCoffice'){
        $documents = Vcoffice::all();
        
    
    }
    else{
        
    
    }
   
//return view('coadmin.viewdocument')->with('status','Document Scan Successfully');
return view('/home')->with('documents',$documents);

}

public function chart(){
   
    return view('coadmin.chart');
}
}
  
 
    
 
 


 