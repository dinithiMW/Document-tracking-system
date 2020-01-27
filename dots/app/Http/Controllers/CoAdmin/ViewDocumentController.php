<?php

namespace App\Http\Controllers\CoAdmin;
use\App\Document;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ViewDocumentController extends Controller
{
    public function addDocument(){
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
         return view('home')->with('response','Branch Added Successfully');
 }
 public function sentDocument(){
    return view('coadmin.sentdocument');
 }
 public function receiveddocument(){
    return view('coadmin.receiveddocument');
 }
public function registered(){
    $documents = Document::all();
    return view('coadmin.viewdocument')->with('documents',$documents);
}

public function registeredit(Request $request, $file_id){
    $documents =Document::findOrFail($file_id);
    return view('co admin.document-edit')->with('documents',$documents);
 }
 public function registerupdate(Request $request, $file_id){
    $documents =Document::find($file_id);
    $documents->file_name = $request->input('name');
    
    $documents->update();
    return redirect('viewdocument')->with('response','Your Data is updated');
   }


}
