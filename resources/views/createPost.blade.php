@extends('layouts.app')

@section('content')

    <script src="https://cdn.tiny.cloud/1/v7e4uaux1bqe04y69ks72gvmjtdwzy9z2i13dgsjr1eadaxj/tinymce/5/tinymce.min.js"
     referrerpolicy="origin"></script>
    
    <script>
        tinymce.init({
            selector: "textarea",  // change this value according to your html
            height: "400"
            });

    </script>
     <div class="col-md-8 mx-auto"   style="margin-top: 150px; margin-bottom: 150px;">

    <title>Create Article</title>
</head>
<body>
    <div>
        <form action="/submitPost" method="POST" >
            @csrf
            <div class="form-group">
                <label for="usr">Title:</label>
                <input type="text" class="form-control" id="usr" name="title" required>
            </div>

            <div class="form-group">
                <label for="usr">Write Post:</label>
                <textarea name="body"></textarea>
            </div>  

            <div class="text-center"> 
            <button type="submit" class="btn btn-primary mx-3 col-lg-8">Publish</button>
            </div>

        </form>
    </div>

</div>
@endsection