@extends('layouts')

@section('content')

<div class="row">
    <div class="col-md-6 m-auto">
        <h1>Todo App</h1>
      
        @if ($message = Session::get('success'))
            <div class="alert alert-success">{{$message}}</div>
        @elseif ($message = Session::get('error'))
            <div class="alert alert-danger">{{$message}}</div>
        @endif
        <form action="{{ route('todos.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title"/>
                @error('title')
                    <p class="text-danger">{{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" placeholder="Enter Description"></textarea>
                @error('description')
                    <p class="text-danger">{{ $message }} </p>
                @enderror
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>   
        <table class="table table-striped">
            <thead>
                <th>SI no</th>
                <th>Title</th>
                <th>Description</th>
            </thead> 
            <tbody>
                @forelse ($todos as $todo)
                    <tr>
                        <td>{{ $todo->id }}</td>
                        <td>{{ $todo->title }}</td>
                        <td>{{ $todo->description }}
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No todos found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection