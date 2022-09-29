<!doctype html>
<html lang="en">
  <head>
    <title>notesform</title>
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
    <div>@include('layout.header')</div>
</head>
<body class="bg-dark">
<form action="{{route('notes.store')}}" method="post" enctype="multipart/form-data">
@csrf
<div class="container mt-4 card p-1  bg-white">
                      @if($message = Session::get('success'))  
                      <div class="alert alert-success">
                      <p>{{$message}}</p>
                      </div>
                      @endif
<h3 class="text-center text-primary">
        Upload Notes
        </h3>
        <div class="row">
        <div class="form-group col-md-6 required">
        <label for="">Course:</label>
        <select type="text" name="course" id=""  class="form-control" >
                    <option value="">Select Course</option>
                    <option value="BCA">BCA</option>
                    <option value="MCA">MCA</option>
                    </select>
        <span class="text-danger">
        @error('subject')
        {{$message}}
        @enderror
        </span>
        </div>
        
        <div class="form-group col-md-6 required">
        <label for="">Semester:</label>
        <select type="text" name="semester" id=""  class="form-control" >
                    <option value="">Select semester</option>
                    <option value="{{1}}">{{1}}</option>
                    <option value="{{2}}">{{2}}</option>
                    <option value="{{3}}">{{3}}</option>
                    <option value="{{4}}">{{4}}</option>
                    <option value="{{5}}">{{5}}</option>
                    <option value="{{6}}">{{6}}</option>
                     </select>    
        <span class="text-danger">
        @error('semester')
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

        
        

        <div class="form-group col-md-5 required">
        <label for="">Notes file:</label>
        <input type="file" name="notesfile" id="" class="form-control"/>
        <span class="text-danger">
        @error('notesfile')
        {{$message}}
        @enderror
        </span>
        </div>

        <div class="container mt-1 card p-0 bg-succes text-center text-primary">
        <a href="{{route('notes.store')}}"><input type="Submit" name="submit" id="" class="form-control btn btn-success"/>
        </a>
        </div>

       
</body>
</html>