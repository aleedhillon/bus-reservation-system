@extends('layouts.app')

@section('content')

<section class="content-header">
  <h1>
    Dashboard
  </h1>

</section>
<div class="content">
  <div class="panel panel-default">
    <div class="panel-body">
      welcome {{auth()->user()->name}}
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <img src="{{ asset('banner.jpg') }}" alt="main banner">
  </div>
</div>

@endsection