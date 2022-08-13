<!doctype html>
<html lang="en">
  <head>
    <title>Exam-paper listView</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
  <a href="{{route('exampaper.form')}}"><button class="btn btn-primary d-inline-block m-2 float-right">Add New Record</button>
            </a>
            @if($message = Session::get('success'))  
                      <div class="alert alert-success">
                      <p>{{$message}}</p>
                      </div>
                      @endif          
            <table class="table" border="3" >
                <thead>
                    <tr>
                    <th>course</th>
                        <th>semester</th>
                        <th>year</th>
                        <th>subject</th>
                        <th>paper_Code</th>
                        <th>exampaper file</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($exampaper as $exampaper)
                    <tr>
                    <td>{{$exampaper->course}}</td>
                            <td>{{$exampaper->semester}}</td>
                            <td>{{$exampaper->year}}</td>
                            <td>{{$exampaper->subject}}</td>
                            <td>{{$exampaper->paper_Code}}</td>
                            <td>{{$exampaper->exampaper_file}}</td>
                        <td>
                        <a href="{{route('exampaper.delete',['id' => $exampaper->id])}}"><button class="btn btn-danger">Delete</button>
                        </a>
                        <a href="{{route('exampaper.edit',['id' => $exampaper->id])}}"><button class="btn btn-primary">Edit</button>
                        
                        </td>
                    </tr>
                   @endforeach
                   
                </tbody>
           
            </div>
     </body>
</html>