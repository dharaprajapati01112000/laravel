<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <form method="post" action="{{$url}}">
        @csrf
        <div class="container">
            <h1 class="text-center">{{$title}}</h1>
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" name="name" id="" value="@if(!empty($student)) {{$student->name}} @endif" class="form-control" placeholder="" aria-describedby="helpId">
              <!-- <small id="helpId" class="text-muted">Help text</small> -->
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email" id="" value="@if(!empty($student)) {{$student->email}}  @endif" class="form-control" placeholder="" aria-describedby="helpId">
              <!-- <small id="helpId" class="text-muted">Help text</small> -->
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="password" name="password" id="" value="" class="form-control" placeholder="" aria-describedby="helpId">
              <!-- <small id="helpId" class="text-muted">Help text</small> -->
            </div>
            <button class="btn btn-primary">Submit</button>

        </div>
    </form>


</body>

</html>