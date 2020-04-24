<?php

namespace App\Http\Controllers\Admin;
use\App\Document;
use\App\Scand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DocumentController extends Controller
{
  /*  public function addDocument(){
        return view('admin.document');
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
         return view('admin.document')->with('response','Document Added Successfully');
 }*/
  public function registered(){
      $documents = Document::all();
      return view('admin.document')->with('documents',$documents);
  }
  public function registeredit(Request $request, $document_id){
    $documents =Document::findOrFail($document_id);
    return view('admin.document')->with('documents',$documents);
 }
 public function delete(Request $request, $id){
    $scands = Scand::find($id);
    $scands-> delete();
    return redirect('/document')->with('status','Document is deleted');
}
public function registeredscan(){
    $scands =Scand::all();
    return view('admin.document')->with('scands',$scands);
}
public function scandedit(Request $request, $id){
    $scands =Scand::findOrFail($id);
    return view('admin.document')->with('scands',$scands);
 }
}
