@extends('layout')

@section('content')

<div class="row">
<div class="col-lg-8 col-lg-offset-3">
<form action="/create/todo" method="post">


@csrf
   <input type="text" class="form-control input-lg" name="todo" placeholder="Create New ToDo List">
</form>
</div>


</div>

<hr>

 @foreach($todos as $todo)                                
      {{ $todo->todo}}
      &nbsp; <a href="{{ route('todo.edit', ['id'=> $todo->id]) }}" class="btn btn-primary btn-xs"> Edit </a>
       &nbsp; <a href="{{ route('todo.delete', ['id'=> $todo->id]) }}" class="btn btn-danger btn-xs"> x </a>
      
      @if(!$todo->completed)
      
       &nbsp; <a href="{{route('todo.completed', ['$id'=> $todo->id])  }}" class="btn btn-success btn-xs">Mark as Completed</a>
      @else
      <span class="text-success"><strong>Completed</strong></span>
      @endif 
      <hr/>  
 @endforeach
@endsection

