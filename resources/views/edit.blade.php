@extends('layout')

@section('content')

<div class="row">
<div class="col-lg-12 col-lg-offset-3">
<form action="{{ route('todo.save', ['id' => $todo->id]) }}" method="post">


@csrf
   <input type="text" class="form-control input-lg" name="todo" value= "{{$todo->todo}}" placeholder="Create New ToDo List">
</form>
</div>


</div>

<hr>


@endsection

