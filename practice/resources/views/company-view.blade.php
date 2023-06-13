@extends('layout.main')
@section('main-section')
        <a href="{{route('company.create')}}">
            <button type="button" class="btn btn-primary btn-lg  float-right m-5">Add</button>
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Website</th>
                    <th>Email</th>
                    {{--  <th>Paasword</th>  --}}
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($company as $keys)
                <tr>
                    <td>{{$keys['company_id']}}</td>
                    <td>{{$keys['name']}}</td>
                    <td>{{$keys['website']}}</td>
                    <td>{{$keys['email']}}</td>
                    {{--  <td>{{$keys['password']}}</td>  --}}
                    <td><a href={{route('company.delete',['id' => $keys['company_id']])}}>
                    <button type="button" class="btn btn-danger">Delete</button>
                    </a></td>
                     <td><a href={{route('company.edit',['id' => $keys['company_id']])}}>
                    <button type="button" class="btn btn-primary">Edit</button>
                    </a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
