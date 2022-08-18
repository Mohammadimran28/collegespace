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
        <th>date</th>
        <th>timetable Download</th>
         
         </tr>

         @foreach ($timetable as $timetable)

         <tr>
                            <td>{{$timetable->course}}</td>
                            <td>{{$timetable->semester}}</td>
                        <td>{{$timetable->date}}</td>
                       
                        <td><a href="{{url('/download{timetablefile}', $timetable->timetablefile)}}" download="{{$timetable->timetablefile}}">Download</a></td>
                        </tr>
                        @endforeach
        </table>
</body>
</html>