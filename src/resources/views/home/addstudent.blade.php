@extends('layoutss.admin')

@section('title')
  <title>Trang chu</title>
@endsection

@section('content')
  <div class="content-wrapper">
  <form method="post" action="{{route('store')}}">
    Name: <input type="text" name="name">
    <br>
    Age: <input type="number" name="age" id="">
    <br>
    <button type="submit" class="btn btn-primary">Add</button>
    </form>
  </div>
@endsection