@include('partials.header')
<h3>Create an Account</h3>
<form action="/store" method="POST">
    @csrf
    
    @error('email')
        <p>Invalid Account</p>
     @enderror

<div class="mb-3">
<label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" name="name">
  </div>
  <div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3">
    <label for="confirmpasswprd" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation">
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>
<h6>Existing User? <a href="/login">Login Here</a></h6>


@include('partials.footer')