<?php

namespace App\Http\Controllers;
use App\Models\Syllabus;
use Illuminate\Http\Request;

class SyllabusController extends Controller
{
    // 
    public function syllabusform()
    {
        return view('syllabusform');
    }

    public function store(Request $request)
    {
        echo "<pre>";
        print_r($request->all());
        $syllabus = new syllabus;
        $syllabus->semester = $request['semester'];
        $syllabus->subject = $request['subject'];
        $syllabus->syllabusfile = $request['syllabusfile'];

        $fileName = $request->file('syllabusfile')->getClientOriginalName();
        $fileName = $request->file('syllabusfile')->storeAs('public/uploads/syllabus',$fileName);
        //$fullFileName = $req->file('syllabusfile')->getClientOriginalName();
        //$extension = $file->getClientOriginalExtension();
       // Log::info($fullfilename['0'], $extension['0']);
        $syllabus->save();
        return redirect('/syllabusform-view');
    }

    public function view()
    {
        $syllabus = Syllabus::all();
            $data = compact('syllabus');
        return view('/syllabus-view')->with($data);
    }

    
    public function delete($id)
    {
        $syllabus = Syllabus::where('id' ,$id);
        if($syllabus != null)
           { $syllabus->delete(); 
        return redirect('syllabusform-view')->with(['msg'=> 'Deleted Succesfully!!']);
    }
        return redirect('syllabusform-view')->with(['message'=>'Invalid!!']);
    }

     public function edit($id)
    {
        $syllabus = Syllabus::where('id' ,$id);
        echo $id;
        if($syllaus = null){
            return redirect('syllabus-view');
        }//else
         
         //return view('notesupdate');
         
     }


     public function update()
    
     {
        return redirect('notesupdate');
     }
}
