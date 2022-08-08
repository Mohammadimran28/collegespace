<?php

namespace App\Http\Controllers;
use App\Models\Notes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class NotesController extends Controller
{
    
    public function notesform()
    {
        return view('notesform');
    }
    public function store(Request $request)
    {
        echo "<pre>";
        print_r($request->all());
        $notes = new notes;
        $notes->semester = $request['semester'];
        $notes->subject = $request['subject'];
        

        $fileName = $request->file('notesfile')->getClientOriginalName();
        $fileName = $request->file('notesfile')->storeAs('public/uploads/notes',$fileName);
        //$fullFileName = $req->file('notesfile')->getClientOriginalName();
        //$extension = $file->getClientOriginalExtension();
       // Log::info($fullfilename['0'], $extension['0']);
       $notes->notesfile = $fileName;
        $notes->save();
        return redirect('/notesform/view');
    }
    
    public function view()
    {
        $notes = Notes::all();
            $data = compact('notes');
        return view('notes-view')->with($data);
    }

    public function delete($id)
    {
        $notes = Notes::where('id' ,$id);
        if($notes != null)
           { $notes->delete(); 
        return redirect('notesform/view')->with('success', 'Deleted Succesfully!!');
    }
        return redirect('notesform/view')->with(['message'=>'Invalid!!']);
    }

     public function edit($id)
     {
         
        return redirect ('notesupdate');
     }
    // {   
    //     // dd($id);
        
        
    //     $notes = Notes::where($id);
    //     // if($notes != null)
    //     //    {
    //             return view('notesupdate', compact('notes'));
    //             // $data = compact('notes');
           
    //       // }
    // }
    //     // $notes = Notes::where('id' ,$id);
    //     // if($notes = null){
    //     //     return redirect('notesform/view');
    //     // }//else
         
    //     //  //return view('notesupdate');
         

     public function update(Notes $notes)
    {
        return redirect('notesupdate');
    }
    
}
