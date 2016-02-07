@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="content">
        <div class="title">
          @if (session('provider_id'))
              <div class="alert alert-success">
                  <h2>ID: {{ session('provider_id') }}</h2>
                  <h2>Name: {{ session('name') }}</h2>
              </div>
              <button class="btn btn-danger btn-lg" onclick="location.href='/logout'">Logout</button>
          @else
            <button class="btn btn-primary btn-lg" onclick="location.href='/auth/facebook'">Login in with Facebook</button>
          @endif

        </div>
    </div>
</div>
@endsection
