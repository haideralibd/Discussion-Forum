@extends('layouts.app')

@section('content')

<div class="row mx-auto p-4"   style="margin-top: 80px; margin-bottom: 50px;" >
    <div class="col-md-10 offset-md-1">
        <h3 class="text-muted text-center">All Posts</h3>           
        <table class="table table-hover table-bordered table-sm shadow">
          <thead class="thead-dark">
            <tr align="center">
              <th>SL.</th>
              <th>Title</th>
              <th>Posted at</th>
              <th>Options</th>
            </tr>
          </thead>
            <tbody>
                
              @foreach ($posts as $post)
                <tr align="center">
                    <td>
                        {{ $loop->iteration }}
                    </td>
                    <td>{{ $post->title}}</td>
                    <td>{{ $post->created_at->format('M d, Y')}}</td>
                    <td>
                            <form action="/deletePost/{{ $post->id }}" method="post">
                                @csrf
                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                            
                            <button type="button" onclick="location.href='/posts/{{ $post->id }}';" class="btn btn-info">View</button>
                            <button type="button" onclick="location.href='/editPost/{{ $post->id }}';"  class="btn btn-success">Edit</button>
                            <button type="submit" class="btn btn-danger btn-group-sm">Delete</button>
                            </form>
                        </div>
                          
                    </td>
                    
                </tr>
              @endforeach
            </tbody>
        </table> 
  </div>
</div>



@endsection