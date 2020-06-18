@extends('layouts.app')
@section('content')
      <!-- Page Header   -->  
<header class="masthead" style="background-image: url({{asset('/images/home-bg.jpg')}}) ">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Any Topic, Any Issue</h1>
            <span class="subheading"><i>Discuss Them Here</i></span>
          </div>
        </div>
      </div>
    </div>
  </header>

    <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
      <p class="text-muted">Recent Posts:</p>


      @foreach ($posts as $post)
          
        <div class="post-preview">
        <a href="/posts/{{ $post->id }}">
            <h2 class="post-title">
              {{ $post->title }}
            </h2>
            <h3 class="post-subtitle">
              {!! \Illuminate\Support\Str::limit($post->body, 50, '...') !!}
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">{{ $post->user->name  }}</a>
          on {{ $post->updated_at->format('M d, Y')}}
          <span class="post-meta text-danger">       
            @if (empty($post->category->name))
                {{''}}
            @else
            {{$post->category->name }}
  
            @endif
          </span>
        </p>

        </div>
        <hr>

      @endforeach

        
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>

@endsection