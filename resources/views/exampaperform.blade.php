<!doctype html>
<html lang="en">
  <head>
    <title>Exampaper form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    
    <style>
    .required label::after{
        content:"*";
        color: red;}
    </style>
</head>
<body class="bg-dark">
<form action="{{route('exampaper.store')}}" method="post" enctype="multipart/form-data">
@csrf
<div class="container mt-4 card p-1  bg-white">
<h3 class="text-center text-primary">
        Upload Exam-paper
        </h3>
        <div class="row">
        <div class="form-group col-md-6 required">
        <label for="">Semester:</label>
        <input type="text" name="semester" id=""  class="form-control" />
        <span class="text-danger">
        @error('semester')
        {{$message}}
        @enderror
        </span>
        </div>

        
        <div class="form-group col-md-6 required">
        <label for="">Year:</label>
        <input type="number" name="year" id=""  class="form-control" />
        <span class="text-danger">
        @error('year')
        {{$message}}
        @enderror
        </span>
        </div>


   
        <div class="form-group col-md-6 required">
        <label for="">Subject:</label>
        <input type="text" name="subject" id="" class="form-control"/>
        <span class="text-danger">
        @error('subject')
        {{$message}}
        @enderror
        </span>
        </div>
        

        <div class="form-group col-md-6 required">
        <label for="">paper-code:</label>
        <input type="text" name="paper_Code" id="" class="form-control"/>
        <span class="text-danger">
        @error('paper_Code')
        {{$message}}
        @enderror
        </span>
        </div>

        <div class="form-group col-md-5 required">
        <label for="">Exam-paper file:</label>
        <input type="file" name="exampaper_file" id="" class="form-control"/>
        <span class="text-danger">
        @error('exampaper_file')
        {{$message}}
        @enderror
        </span>
        </div>

        <div class="container mt-1 card p-0 bg-succes text-center text-primary">
        <a href="{{route('exampaper.store')}}"><input type="Submit" name="submit" id="" class="form-control btn btn-success"/>
        </a>
        </div>

       
</body>
</html>