<?php

namespace App\Http\Controllers;
use App\Models\Syllabus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Stroage;

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
        $syllabus->course = $request['course'];
        $syllabus->semester = $request['semester'];
        $syllabus->subject = $request['subject'];
        $fileName = $request->file('syllabusfile')->getClientOriginalName();
        $fileName = $request->file('syllabusfile')->move('assets',$fileName);
        $syllabus->syllabusfile = $fileName;
        $syllabus->save();
        return redirect('/syllabusform-view')->with(['success'=>'saved sucessfully!!']);
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
        return redirect('syllabusform-view')->with(['success'=> 'Deleted Succesfully!!']);
    }
        return redirect('syllabusform-view')->with(['success'=>'Invalid!!']);
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

     public function show()
    {
        $syllabus=Syllabus::all();
        return view('user-syllabus',compact('syllabus'));
    }

    
    public function download(Request $request, $syllabusfile)
    {
        
        return Response()->view(public_path('/'.$syllabusfile));
        
    }
}
