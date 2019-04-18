@extends('layouts.login_user')

@section('konten')
<div class="container">
    <div class="row">
      <h3>Anda Login Sebagai {{ Auth::user()->name}}</h3><br>
    </div>
</div>
@endsection
