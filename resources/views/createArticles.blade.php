<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>


    <title>Document</title>
</head>
<body>
    <div>
        <form method="GET" action="{{ asset('/test')}}">


<textarea name="testdata"></textarea>
<button type="submit" class="btn btn-primary">Display</button>
</form>
</div>
<script>tinymce.init({ selector:'textarea' });</script>

</body>
</html>