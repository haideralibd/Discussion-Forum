@foreach ($post->comment as $comment)
    @if($loop->first)
        <hr class="">
    @endif
        <div class="col-lg-6 col-md-8 mx-auto">
        <header style="display: flex; justify-content: space-between;">
        
            <p class="m-0"><bold>{{ $comment->user->name }} said ... </bold></p>
        
        </header>
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
              <textarea class="form-control" onclick="location.href = '/login';" name="addComment" id="addComment" rows="5" placeholder="Write a comment..."></textarea>
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
              <textarea class="form-control" name="addComment" id="addComment" rows="5" placeholder="Write a comment..."></textarea>
        </div>
        <div class="form-group">
            <div class="col-sm-10">                    
                <button class="btn btn-success btn-circle text-uppercase" type="submit" id="submitComment"><span class="glyphicon glyphicon-send"></span> Summit comment</button>
            </div>
        </div>            
    </form>
</div>
@endauth
