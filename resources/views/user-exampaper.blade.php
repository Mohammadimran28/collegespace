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
        <th>year</th>
        <th>subject</th>
        <th>Paper code</th>
        <th>Exam-paper Download</th>
         
         </tr>

         @foreach ($exampaper as $exampaper)

         <tr>
                            <td>{{$exampaper->course}}</td>
                            <td>{{$exampaper->semester}}</td>
                            <td>{{$exampaper->year}}</td>
                        <td>{{$exampaper->subject}}</td>
                        <td>{{$exampaper->paper_Code}}</td>
                       
                        <td><a href="{{url('/download{exampaper_file}', $exampaper->exampaper_file)}}" download="{{$exampaper->exampaper_file}}">Download</a></td>
                        </tr>
                        @endforeach
        </table>
</body>
</html>