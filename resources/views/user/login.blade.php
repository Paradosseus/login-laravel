@include('partials.header')
<h3>Login Page</h3>
<form action="/login/process" method="POST">
    @csrf

    @error('email')
        <p>Invalid Account</p>
     @enderror
  <div class="col">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
<h6>New User? <a href="/register">Register here</a></h6>
</div>
<div class="col">
    <img src="" alt="">
</div>

@include('partials.footer')