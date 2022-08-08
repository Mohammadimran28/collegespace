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
        $exampaper->semester = $request['semester'];
        $exampaper->year = $request['year'];
        $exampaper->subject = $request['subject'];
        $exampaper->paper_Code = $request['paper_Code'];
        $exampaper->exampaper_file = $request['exampaper_file'];

        $fileName = $request->file('exampaper_file')->getClientOriginalName();
        $fileName = $request->file('exampaper_file')->storeAs('public/uploads/exampaper',$fileName);
        //$fullFileName = $req->file('exampaperfile')->getClientOriginalName();
        //$extension = $file->getClientOriginalExtension();
       // Log::info($fullfilename['0'], $extension['0']);
        $exampaper->save();
        return redirect('/exampaperform-view');
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
        return redirect('exampaperform-view')->with(['msg'=> 'Deleted Succesfully!!']);
    }
        return redirect('exampaperform-view')->with(['message'=>'Invalid!!']);
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
