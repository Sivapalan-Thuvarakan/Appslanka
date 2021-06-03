<!-- this line extends default master/layout which inside layout.app-->
@extends('layout.app')
@section('title','Contact')

@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">This is Our @if($teammembers > 50) Big @endif Team</h1>
    <p class="lead">Be in touch to have some fun and code help</p>
  </div>
</div>
@endsection

