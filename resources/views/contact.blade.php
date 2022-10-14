@extends('layouts.defaultt')
@section('content')
  <div class="form">
  <form action="{{route('submit.form')}}" method="POST">
    @csrf
    <div class="row">
    <div class="form-group col-md-6">

      <label for="first_name">First Name</label>
      <input type="text" class="form-control" id="first_name" name="first_name" placeholder="first_name">
      @if($errors->has('first_name'))
    <div class="error">{{ $errors->first('first_name') }}</div>
    @endif
    </div>

    <div class="form-group col-md-6">
      <label for="last_name">Last Name</label>
      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="last_name">
      @if($errors->has('last_name'))
    <div class="error">{{ $errors->first('last_name') }}</div>
    @endif
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
      @if($errors->has('email'))
    <div class="error">{{ $errors->first('email') }}</div>
    @endif
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>

  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>

  </div>

  <style>
.form{
padding-top:100px;
padding-bottom:100px;

}
.form .form-group{
    padding-bottom:20px;
}

    </style>
@stop