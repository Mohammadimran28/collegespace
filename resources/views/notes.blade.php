<!DOCTYPE html>

<html lang="en">
  <head>
    <div>@include('layout.header')</div>
  </head>


  <body>

  
  <table border="5">
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
                       
                        <td><a href="{{url('/download{notesfile}', $notes->notesfile)}}" download="{{$notes->notesfile}}">Download</a></td>
                        </tr>
                        @endforeach
        </table>
    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>