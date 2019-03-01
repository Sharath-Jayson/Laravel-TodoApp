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
                         <hr/>
     
                    @endforeach
@endsection

