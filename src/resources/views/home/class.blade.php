@extends('layoutss.admin')

@section('title')
  <title>Trang chu</title>
@endsection

@section('content')
  <div class="content-wrapper">
  <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="add"><button class="btn btn-primary"><a style="color:aliceblue" href="">Add Class</a></button></div>
               <table class="table">
                   <thead>
                       <tr>
                           <th>Id</th>
                           <th>NameClass</th>
                           <th>Delete</th>
                           <th>Edit</th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach($all as $al)
                       <tr>
                           <td>{{$al->id}}</td>
                           <td>{{$al->nameclass}}</td>
                           <td><a href="">Delete</a></td>
                           <td><a href="">Edit</a></td>
                       </tr>
                       @endforeach
                   </tbody>
               </table>
            </div>
        </div>
    </div>
  </div>
@endsection