@extends('layouts.app')


@section('content')
    <div class="card-body">
        <h5 class="card-title display-2" style="color:white; text-align:center; font-size: 28px;">Todo App</h5>
        <form action="/" method="POST">
            @csrf
            <div class="col-sm-5 d-flex justify-content-center" style="margin: 0 auto;">
                <input type="text"  name="title" class="form-control" id="exampleFormControlInput1" placeholder="task">
                <button type="submit" class="btn btn-primary btn-sm" style="font-size:10px; font-weight: bold;" >Add task</button>
            </div>
        </form> <br>
        <h5 class="card-title display-2" style="color:white; text-align:center; font-size: 28px;">My Todo List</h5>
            <div class="card" style="width: 30.5rem; margin: 0 auto;">
                @foreach ($todos as $todo)
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{$todo->title}}</li>
                    </ul>
               @endforeach
          </div>
    </div>
@endsection