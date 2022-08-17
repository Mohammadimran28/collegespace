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
        <th>ID</th>
        <th>course</th>
        <th>Semester</th>
        <th>subject</th>
        <th>Notes Download</th>
         
         </tr>

         @foreach ($syllabus as $syllabus)

         <tr>
                            <td>{{$syllabus->id}}</td>
                            <td>{{$syllabus->course}}</td>
                            <td>{{$syllabus->semester}}</td>
                        <td>{{$syllabus->subject}}</td>
                       
                        <td><a href="{{url('/download{syllabus$syllabusfile}', $syllabus->syllabus$syllabusfile)}}" download="{{$syllabus->syllabus$syllabusfile}}">Download</a></td>
                        </tr>
                        @endforeach
        </table>
</body>
</html>