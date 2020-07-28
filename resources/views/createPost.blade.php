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
     <div class="col-md-8 mx-auto"  style="margin-top: 80px; margin-bottom: 150px;" >

    <title>Create Article</title>
</head>
<body>
    <div>
        <form action="/submitPost" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="usr">Title:</label>
                <input type="text" class="form-control" id="usr" name="title" required>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select id="category" name="category" class="form-control">
                    <option hidden disabled selected value>Select a Category</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">
                        {{$category->name}}
                    </option>
                    @endforeach

                </select>
                </div>

            <div class="form-group">
                <label class="file">Upload Image.</label>
                <input type="file" class="form-control-file">
            </div>
            <div class="form-group">
                <label for="usr">Write Post:</label>
                <textarea name="body"></textarea>
            </div>  

            <div class="text-center "> 
            <button type="submit" class="shadow btn btn-primary col-lg-8 col-sm-4">Publish</button>
            </div>

        </form>
    </div>

</div>
@endsection