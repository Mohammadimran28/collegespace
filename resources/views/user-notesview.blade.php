<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                       
                        <td><iframe src="{{url('/download', $notes->notesfile)}}">Download</iframe></td>
                        </tr>
                        @endforeach
        </table>
</body>
</html>