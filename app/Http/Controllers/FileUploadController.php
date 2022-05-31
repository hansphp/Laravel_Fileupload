<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
  
class FileUploadController extends Controller
{
    public function fileUpload()
    {
        return view('fileUpload');
    }
  
    public function fileUploadPost(Request $request)
    {
        $fileName = time().'.'.$request->file->extension();  
   
        $request->file->move(public_path('uploads'), $fileName);
   
        return back()
            ->with('success','Has subido correctamente el archivo.')
            ->with('file',$fileName);
    }
}