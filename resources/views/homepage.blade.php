@extends('layout.layout')
@section('content')
<h1>
    <div class="p-3">

    </div>
    Welcome to Takyiwaa's Cuisine
</h1>

<h1>
<div class="p-3">
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="register">
      <img src="{{ asset('person.png') }}" alt="person-icon" width="30" height="24" class="d-inline-block align-text-top">
      Register
    </a>
  </div>
</nav>
</div>
</h1>

@endsection

@section('capiche')

<div class="mx-auto" style="width: 500px;">

    <div class="grid gap-3">
    <div class="p-2 g-col-6"><img src="{{ asset('food1.jpg') }}" class="rounded-2 w-100" alt="main course"></div>
    <div class="p-2 g-col-6"><img src="{{ asset('chips.jpg') }}" class="rounded-2 w-100" alt="chips"></div>
    <div class="p-2 g-col-6"><img src="{{ asset('spag.jpg') }}" class="rounded-2 w-100" alt="spag"></div>
    <div class="p-2 g-col-6"><img src="{{ asset('wrap.jpg') }}" class="rounded-2 w-100" alt="wrap"></div>
    </div>
</div>

<div class="p-5">
    <button type="button" class="btn btn-primary">Breakfast</button>
    <button type="button" class="btn btn-secondary">Lunch</button>
    <button type="button" class="btn btn-success">Supper</button>

</div>

<link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css') }}">
@endsection
