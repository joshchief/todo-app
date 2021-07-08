@extends('layouts.app')

@section('content')
<div class="card-body">
    <h5 class="card-title display-2" style="color:white; text-align:center; font-size: 28px;">Todo App</h5>
    <form action="{{route('todo.update', $todo->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="col-sm-5 d-flex  justify-content-between" style="margin: 0 auto;">
            <input type="text" name="id" value="{{$todo->id}}" hidden>
            <input type="text"  name="title" class="form-control" id="exampleFormControlInput1" value="{{$todo->title}}">
            <button type="submit" class="btn btn-primary" style="font-size:10px; font-weight: bold;" >Add task</button>
        </div>
    </form> 
</div>
@endsection