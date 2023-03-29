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
    <div class="container">
        <a href="{{route('student.create')}}">
            <button type="button" class="btn btn-primary btn-lg  float-right m-5">Add</button>
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    {{--  <th>Paasword</th>  --}}
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($student as $keys)
                <tr>
                    <td>{{$keys['student_id']}}</td>
                    <td>{{$keys['name']}}</td>
                    <td>{{$keys['email']}}</td>
                    {{--  <td>{{$keys['password']}}</td>  --}}
                    <td><a href={{route('student.delete',['id' => $keys['student_id']])}}>
                    <button type="button" class="btn btn-danger">Delete</button>
                    </a></td>
                     <td><a href={{route('student.edit',['id' => $keys['student_id']])}}>
                    <button type="button" class="btn btn-primary">Edit</button>
                    </a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>