@foreach ($post->comment as $comment)
    @if($loop->first)
        <hr class="">
    @endif
        <div class="col-lg-6 col-md-8 mx-auto bg-light">
        
            <p class="m-0"><small><strong>{{ $comment->user->name }} said... </strong></small></p>
        
        <small>
        {{ $comment->body }}
        </small>
        
    </div>
    @continue($loop->last)
    <hr class="col-md-6 col-sm-4">
@endforeach

@guest
<hr class="col-md-6 col-sm-4">

<div class="col-lg-6 col-md-8 mx-auto" id="add-comment">
<form action="/comments/{{ $post->id }}" method="post" class="form-horizontal" id="commentForm" role="form"> 
        @csrf
        <div class="form-group">
              <textarea class="form-control shadow" onclick="location.href = '/login';" name="addComment" id="addComment" rows="5" placeholder="Write a comment..."></textarea>
        </div>           
    </form>
</div>
@endguest

@auth
<hr class="col-md-6 col-sm-4">

<div class="col-lg-6 col-md-8 mx-auto" id="add-comment">
<form action="/comments/{{ $post->id }}" method="post" class="form-horizontal" id="commentForm" role="form"> 
        @csrf
        <div class="form-group">
              <textarea class="form-control shadow" name="addComment" id="addComment" rows="5" placeholder="Write a comment..." required></textarea>
        </div>
        <div class="form-group">
            <div class="col-sm-10">                    
                <button class="btn btn-success text-uppercase btn-sm" type="submit" id="submitComment">post comment</button>
            </div>
        </div>            
    </form>
</div>
@endauth
