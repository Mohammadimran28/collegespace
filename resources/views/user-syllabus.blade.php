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
<body>
    <div>
      @include('layout.navbar')
    </div>
    <div class="col-md-6 col-md-offset-3 text-center section-heading">
      <h2>Download Syllabus</h2>
      <p class="lead">In this section students can download Syllabus of their related branches.<br> All Those notes picked from teachers and students from respected collages and Universities.</p>
  </div>
    <table class ="table text-center" border="4">
    <tr>
        
        <th>course</th>
        <th>Semester</th>
        <th>subject</th>
        <th>Syllabus Download</th>
         
         </tr>

         @foreach ($syllabus as $syllabus)

         <tr>
                            
                            <td>{{$syllabus->course}}</td>
                            <td>{{$syllabus->semester}}</td>
                        <td>{{$syllabus->subject}}</td>
                       
                        <td><a href="{{url('/download{syllabusfile}', $syllabus->syllabusfile)}}" download="{{$syllabus->syllabusfile}}">Download </a></td>
                        </tr>
                        @endforeach
        </table>
        <div>
      @include('layout.footer')
    </div>
</body>
</html>