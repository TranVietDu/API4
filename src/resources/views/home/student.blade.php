@extends('layoutss.admin')

@section('title')
<title>Trang chu</title>
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="add"><button class="btn btn-primary"><a style="color:aliceblue" href="{{route('create')}}">Add Student</a></button></div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($all as $al)
                        <tr>
                            <td>{{$al->id}}</td>
                            <td>{{$al->name}}</td>
                            <td>{{$al->age}}</td>
                            <td>
                                <form action="{{route('student.destroy',[$al->id])}}" method="post">
                                    @csrf
                                    {{method_field('delete')}}
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                            <td><a href="{{route('student.destroy',[$al->id])}}">Edit</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection