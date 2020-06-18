@extends('layouts.app')

@section('content')

<div class="row mx-auto p-4"   style="margin-top: 80px; margin-bottom: 50px;" >
    <div class="col-md-10 offset-md-1">
        <h3 class="text-muted text-center">All Posts</h3>           
        <table class="table table-hover table-bordered table-sm">
          <thead class="thead-dark">
            <tr>
              <th>SL.</th>
              <th>Title</th>
              <th>Created at.</th>
              <th>Options</th>
            </tr>
          </thead>
            <tbody>
                
              @foreach ($posts as $post)
                <tr>
                    <td align="center">
                        {{ $loop->iteration }}
                    </td>
                    <td align="center">{{ $post->title}}</td>
                    <td align="center">{{ $post->created_at->format('M d, Y')}}</td>
                    <td align="center">
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