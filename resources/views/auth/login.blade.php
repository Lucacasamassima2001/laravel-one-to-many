@extends('guests.layouts.base')

@section('contents')
<form method="post" action="{{ route('login') }}">
      @csrf
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="remember">
          <label class="form-check-label" for="remember">Remember me</label>
        </div>
        <a  href="{{ route('password.request') }}">
            Forgot your password?
        </a>
        <button type="submit" class="btn btn-primary">Login</button>  
  </form>
@endsection