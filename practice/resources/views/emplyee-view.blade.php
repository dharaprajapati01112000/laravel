@extends('layout.main')
@section('main-section')
        <a href="{{route('employee.create')}}">
            <button type="button" class="btn btn-primary btn-lg  float-right m-5">Add</button>
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Website</th>
                    <th>Email</th>
                    {{--  <th>Paasword</th>  --}}
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employee as $keys)
                <tr>
                    <td>{{$keys['empl_id']}}</td>
                    <td>{{$keys['fname']}}</td>
                    <td>{{$keys['lname']}}</td>
                    <td>{{$keys['website']}}</td>
                    <td>{{$keys['email']}}</td>
                    {{--  <td>{{$keys['password']}}</td>  --}}
                    <td><a href={{route('employee.delete',['id' => $keys['empl_id']])}}>
                    <button type="button" class="btn btn-danger">Delete</button>
                    </a></td>
                     <td><a href={{route('employee.edit',['id' => $keys['empl_id']])}}>
                    <button type="button" class="btn btn-primary">Edit</button>
                    </a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
