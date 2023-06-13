@extends('layout.main')
@section('main-section')
<div class="my-5">
<div class="title h1 my-5 text-center">{{$title}}</div>
   <form method="post" action="{{$url}}">
   @csrf
    <div class="form-row">
     <div class="form-group col-md-6">
        <label for="inputEmail4">Name</label><span class="text-danger">*
        <input type="text" name="name" class="form-control" value="@if(!empty($company)) {{$company->name}} @endif" id="inputname" placeholder="Name">
     @error('name')
      {{$message}}
      @enderror
     </span>
      </div>
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label><span class="text-danger">*
        <input type="email" name="email" class="form-control" value="@if(!empty($company)) {{$company->email}} @endif" id="inputEmail" placeholder="Email">
     @error('email')
     {{$message}}
     @enderror
     </span>
      </div>
      <div class="form-group col-md-6">
        <label for="inputEmail4">Website Name</label><span class="text-danger">*
        <input type="text" name="website" class="form-control" value="@if(!empty($company)) {{$company->website}} @endif" id="inputwebsite" placeholder="Website">
     @error('website')
     {{$message}}
      @enderror
     </span>
      </div>
      <div class="form-group">
          <label for="exampleFormControlFile1">Upload logo</label>
          <input type="file" class="form-control-file form-control" name="logo" id="inputlogo">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label><span class="text-danger">*
        <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password">
     @error('password')
      {{$message}}
       @enderror
     </span>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
   </form>
</div>
 @endsection
