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
      <h2>Download Exam Paper</h2>
      <p class="lead">In this section students can download Exam Paper of their related branches.<br> All Those notes picked from teachers and students from respected collages and Universities.</p>
  </div>
    <table class ="table text-center" border="4">
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
        <div>
      @include('layout.footer')
    </div>
</body>
</html>