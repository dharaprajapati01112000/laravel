@extends('layout.main')
@section('main-section')
<div class="my-5">
<div class="title h1 my-5 text-center">{{$title}}</div>
   <form method="post" action="{{$url}}">
   @csrf
    <div class="form-row">
     <div class="form-group col-md-6">
        <label for="inputEmail4">First Name</label><span class="text-danger">*
        <input type="text" name="fname" class="form-control" value="@if(!empty($employee)) {{$employee->fname}} @endif" id="inputfname" placeholder="First Name">
          @error('fname')
           {{$message}}
          @enderror
     </span>
      </div>
      <div class="form-group col-md-6">
        <label for="inputEmail4">Last Name</label> <span class="text-danger">*
        <input type="text" name="lname" class="form-control" value="@if(!empty($employee)) {{$employee->lname}} @endif" id="inputlname" placeholder="Last Name">
     @error('lname') {{$message}} @enderror
     </span>
      </div>
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label><span class="text-danger">*
        <input type="email" name="email" class="form-control" id="inputEmail" value="@if(!empty($employee)) {{$employee->email}} @endif" placeholder="Email">
     @error('email') {{$message}} @enderror
     </span>
    </div>

      <div class="form-group col-md-6">
        <label for="inputEmail4">Website Name</label><span class="text-danger">*
            <div class="form-group col-md-6">
                 <select class="form-select form-control" name="website" style="color: #41A7A5" aria-label="Default select example">
                    @foreach ($company as $keys)
                          <option value="@if(!empty($company)) {{$keys->company_id}} @endif">{{$keys->website}}</option>
                    @endforeach
                 </select>
              </div>
        {{--  <input type="text" name="website" class="form-control" id="inputwebsite" value="@if(!empty($employee)) {{$employee->website}} @endif" placeholder="Website">  --}}
     @error('website') {{$message}} @enderror
     </span>
      </div>
      <div class="form-group">
          <label for="exampleFormControlFile1">Profile picture</label>
          <input type="file" class="form-control-file form-control" name="logo" id="inputlogo">
          {{--  <span class="text-danger">
     @error('logo') {{$message}} @enderror
     </span>  --}}
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label><span class="text-danger">*
        <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">

     @error('password') {{$message}} @enderror
     </span>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
   </form>
</div>
 @endsection
