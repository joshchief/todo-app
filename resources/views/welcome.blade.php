@extends('layouts.app')


@section('content')
    <div class="card-body">
        <h5 class="card-title display-2" style="color:white; text-align:center; font-size: 28px;">Todo App</h5>
        <form action="{{route('todo.store')}}" method="POST">
            @csrf
            <div class="col-sm-5 d-flex  justify-content-between" style="margin: 0 auto;">
                <input type="text"  name="title" class="form-control" id="exampleFormControlInput1" placeholder="type here... ">
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
                                @if ($todo->completed == 0)
                                    <form action="{{route('todo.update', $todo->id)}}" method="POST">
                                        @method('PUT')
                                        @csrf
                                        <input type="text" name="completed" value="1" hidden>
                                        <button class="btn btn-success btn-sm" >mark as completed</button>
                                    </form>
                                @else
                                    <form action="{{route('todo.update', $todo->id)}}" method="POST">
                                        @method('PUT')
                                        @csrf
                                        <input type="text" name="completed" value="0" hidden>
                                        <button class="btn btn-warning btn-sm" >mark as not completed</button>
                                    </form>
                                @endif
                                
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                                        <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                                        <line x1="16" y1="5" x2="19" y2="8" />
                                    </svg>

                                    <form action="{{route('todo.destroy', $todo->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="border-0 bg-transparent m1-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <line x1="4" y1="7" x2="20" y2="7" />
                                                <line x1="10" y1="11" x2="10" y2="17" />
                                                <line x1="14" y1="11" x2="14" y2="17" />
                                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                              </svg>
                                        </button>
                                        
                                    </form>
                                
                                    
                            </div>
                        </li>
                        
                        
                    </ul>
               @endforeach
          </div>
         
    </div>
@endsection