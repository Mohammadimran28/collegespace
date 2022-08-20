<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <div>
        @include('layout.header')
      </div>
      <style>
        .table{
            width:50%;
            margin-left:auto;
            margin-right:auto;
        }
        </style>
    </head> 
</head>

<body>
    <div>
        @include('layout.navbar')
    </div>
    <div class="col-md-6 col-md-offset-3 text-center section-heading">
        <h2>Download Notes</h2>
        <p class="lead">In this section students can download Notes of their related branches.<br> All Those notes picked from teachers and students from respected collages and Universities.</p>
    </div>
    
    <table class ="table text-center" border="4">
    <tr>
        <th>course</th>
        <th>Semester</th>
        <th>subject</th>
        <th>Notes Download</th>
         
         </tr>

         @foreach ($notes as $notes)

         <tr>
                            <td>{{$notes->course}}</td>
                            <td>{{$notes->semester}}</td>
                        <td>{{$notes->subject}}</td>
                       
                        <td><a href="{{route('notes.download', $notes->notesfile)}}" >Download</a></td>
                        </tr>
                        @endforeach
        </table>
        <div>
            @include('layout.footer')
          </div>
</body>
</html>