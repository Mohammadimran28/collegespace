<!doctype html>
<html lang="en">
  <head>
    <title>NotesUpdate</title>
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
<form action="{{route('notes.edit', ['notes' => $notes->id])}}" method="get" enctype="multipart/form-data">
@csrf
@method
<div class="container mt-4 card p-1  bg-white">
<h3 class="text-center text-primary">
        Update Notes
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
        @error('file')
        {{$message}}
        @enderror
        </span>
        </div>

        <div class="container mt-1 card p-0 bg-succes text-center text-primary">
        <a href="{{route('notes.update')}}"><input type="Submit" name="submit" id="" class="form-control btn btn-success"/>
        </a>
        </div>
        </div>
       
</body>
</html>