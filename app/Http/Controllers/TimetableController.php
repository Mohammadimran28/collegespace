<?php

namespace App\Http\Controllers;
use App\Models\Timetable;
use Illuminate\Http\Request;

class TimetableController extends Controller
{
    public function timetableform()
    {
        return view('timetableform');
    }

    public function store(Request $request)
    {
        echo "<pre>";
        print_r($request->all());
        $timetable = new Timetable;
        $timetable->semester = $request['semester'];
        $timetable->timetablefile = $request['timetablefile'];
        $timetable->date = $request['date'];

        $fileName = $request->file('timetablefile')->getClientOriginalName();
        $fileName = $request->file('timetablefile')->storeAs('public/uploads/timetable',$fileName);
        //$fullFileName = $req->file('timetablefile')->getClientOriginalName();
        //$extension = $file->getClientOriginalExtension();
       // Log::info($fullfilename['0'], $extension['0']);
        $timetable->save();
        return redirect('/timetableform-view');
    }

    public function view()
    {
        $timetable = Timetable::all();
            $data = compact('timetable');
        return view('/timetable-view')->with($data);
    }

    
    public function delete($id)
    {
        $timetable = Timetable::where('id' ,$id);
        if($timetable != null)
           { $timetable->delete(); 
        return redirect('timetableform-view')->with(['msg'=> 'Deleted Succesfully!!']);
    }
        return redirect('timetableform-view')->with(['message'=>'Invalid!!']);
    }

     public function edit($id)
    {
        $timetable = Timetable::where('id' ,$id);
        echo $id;
        if($syllaus = null){
            return redirect('timetable-view');
        }//else
         
         //return view('notesupdate');
         
     }


     public function update()
    
     {
        return redirect('notesupdate');
     }
}
