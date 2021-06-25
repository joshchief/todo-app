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
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                        @if ($todo->completed == 0)
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <polyline points="9 6 15 12 9 18" />
                          </svg>
                        @else
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 12l5 5l10 -10" />
                          </svg>
                        @endif
                            {{$todo->title}}
                            <div class="mr-4 d-flex">
                                <form action="{{route('todo.update', $todo->id)}}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <input type="text" name="completed" value="1" hidden>
                                    <button class="btn btn-success" >mark as completed</button>
                                </form>
                            </div>
                        </li>
                        
                        
                    </ul>
               @endforeach
          </div>
         
    </div>
@endsection