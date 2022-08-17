<!doctype html>
<html lang="en">
  <head>
    <title>SyllabuslistView</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
  <a href="{{route('syllabus.form')}}"><button class="btn btn-primary d-inline-block m-2 float-right">Add New Record</button>
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
                        <th>subject</th>
                        <th>Syllabusfile</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($syllabus as $syllabus)
                    <tr>
                    <td>{{$syllabus->course}}</td>
                            <td>{{$syllabus->semester}}</td>
                        <td>{{$syllabus->subject}}</td>
                        <td>{{$syllabus->syllabusfile}}</td>
                        <td>
                        <a href="{{route('syllabus.delete',['id' => $syllabus->id])}}"><button class="btn btn-danger">Delete</button>
                        </a>
                        <a href="{{route('syllabus.edit',['id' => $syllabus->id])}}"><button class="btn btn-primary">Edit</button>
                        
                        </td>
                    </tr>
                   @endforeach
                   
                </tbody>
           
            </div>
     </body>
</html>