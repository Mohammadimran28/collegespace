<!doctype html>
<html lang="en">
  <head>
    <title>timetableform</title>
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
<form action="{{route('timetable.store')}}" method="post" enctype="multipart/form-data">
@csrf
<div class="container mt-4 card p-1  bg-white">
<h3 class="text-center text-primary">
        Upload Time-Table
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


        <div class="form-group col-md-5 required">
        <label for="">time-table file:</label>
        <input type="file" name="timetablefile" id="" class="form-control"/>
        <span class="text-danger">
        @error('timetablefile')
        {{$message}}
        @enderror
        </span>
        </div>

   
        <div class="form-group col-md-6 required">
        <label for="">Date:</label>
        <input type="date" name="date" id="" class="form-control"/>
        <span class="text-danger">
        @error('date')
        {{$message}}
        @enderror
        </span>
        </div>
        


        <div class="container mt-1 card p-0 bg-succes text-center text-primary">
        <a href="{{route('timetable.store')}}"><input type="Submit" name="submit" id="" class="form-control btn btn-success"/>
        </a>
        </div>

       
</body>
</html>