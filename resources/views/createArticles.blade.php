@extends('layouts.app')

@section('content')
<div class="col-md-8 mx-auto"   style="margin-top: 150px; margin-bottom: 150px;">

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>


    <title>Create Article</title>
</head>
<body>
    <div>
        <form method="GET" action="{{ asset('/test')}}">


<textarea name="testdata"></textarea>
<button type="submit" class="btn btn-primary">Display</button>
</form>
</div>
<script>tinymce.init({ selector:'textarea' });</script>

</div>
@endsection