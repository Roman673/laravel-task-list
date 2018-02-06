@extends('layouts.app')

@section('content')
  @include('common.errors')

  <div class="card mb-3">
    <div class="card-header">New Task</div>
    <div class="card-body">
      {!! Form::open(['route' => 'create']) !!}
        {{ Form::token() }}
        <div class="input-group input-group-lg">
          {{ Form::text('task-name', '', ['class' => 'form-control', 'placeholder' => 'Enter a new task']) }}
          <div class="input-group-append">
            {{ Form::submit('Add task', ['class' => 'btn btn-outline-secondary']) }}
          </div>
        </div>
      {!! Form::close() !!}
    </div>
  </div>
  
  <div class="card">
    <div class="card-header">Current Task</div>
    <div class="card-body">
      <ul class="list-group list-group-flush">
      @forelse ($tasks as $task)
        <li class="list-group-item">
          <form action="{{ route('delete', $task->id) }}" method="post"> 
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-outline-danger btn-sm mr-2">Delete</button>
            {{ $task->name }}
          </form>
        </li>
      @empty
        <li class="list-group-item">Task List is Empty!</li>
      @endforelse
      </ul>
    </div>
  </div>
@endsection
