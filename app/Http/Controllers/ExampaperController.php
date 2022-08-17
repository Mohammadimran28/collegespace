<?php

namespace App\Http\Controllers;
use App\Models\Exampaper;
use Illuminate\Http\Request;

class ExampaperController extends Controller
{
    public function exampaperform()
    {
        return view('exampaperform');
    }

    public function store(Request $request)
    {
        echo "<pre>";
        print_r($request->all());
        $exampaper = new Exampaper;
        $exampaper->course = $request['course'];
        $exampaper->semester = $request['semester'];
        $exampaper->year = $request['year'];
        $exampaper->subject = $request['subject'];
        $exampaper->paper_Code = $request['paper_Code'];
        $fileName = $request->file('exampaper_file')->getClientOriginalName();
        $fileName = $request->file('exampaper_file')->storeAs('public/uploads/exampaper',$fileName);
        $exampaper->exampaper_file = $fileName;
        $exampaper->save();
        return redirect('/exampaperform-view')->with(['success'=>'saved sucessfully!!']);
    }

    public function view()
    {
        $exampaper = Exampaper::all();
            $data = compact('exampaper');
        return view('/exampaper-view')->with($data);
    }

    
    public function delete($id)
    {
        $exampaper = Exampaper::where('id' ,$id);
        if($exampaper != null)
           { $exampaper->delete(); 
        return redirect('exampaperform-view')->with(['success'=> 'Deleted Succesfully!!']);
    }
        return redirect('exampaperform-view')->with(['success'=>'Invalid!!']);
    }

     public function edit($id)
    {
        $exampaper = Exampaper::where('id' ,$id);
        echo $id;
        if($syllaus = null){
            return redirect('exampaper-view');
        }//else
         
         //return view('notesupdate');
         
     }


     public function update()
    
     {
        return redirect('notesupdate');
     }
}
